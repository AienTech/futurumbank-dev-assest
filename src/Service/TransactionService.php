<?php

namespace App\Service;

use App\Entity\Address;
use App\Entity\Transaction;
use App\Repository\AddressRepository;
use App\Repository\TransactionRepository;
use App\Type\BlockAddress;
use App\Type\Payload;
use App\Type\Result;

class TransactionService {

	public function __construct(
		private readonly FetchService $fetchService,
		private readonly TransactionRepository $transactionRepository,
		private readonly AddressRepository $addressRepository,
	) {}

	/**
	 * Retrieves transactions for a given address and payload.
	 * It checks if an address with the provided payload already exists.
	 * It will retrieve and save transactions if not.
	 */
	public function getAddressTransactions(Payload $payload): Result {

		$address = $this->addressRepository->findOneBy(
			[
				"address" => $payload->getAddress()
			],
		);

		/**
		 * @var Result|null $result
		 */
		$result = null;

		if (is_null($address)) {
			/**
			 * It is basically the first time we called for the address
			 */
			$this->fetchAddressTxs($payload);
		} else {
			/**
			 * Solutions:
			 * [ ] 1. Webhook
			 * [ ] 2. Cronjob optimistic update
			 * [x] 3. Naive date diff check
			 */
			$today = new \DateTime();
			$interval = $address->getLastVerifiedAt()->diff($today);

			if ($interval->days > 0) {
				$this->addressRepository->remove($address);
				$this->fetchAddressTxs($payload);
			}
		}

		$txs = $this->transactionRepository->getTransactionsWithPayload($payload);

		$result = new Result(
			count: $txs['count'],
			averageQuantity: $txs['average']
		);

		return $result;
	}

	/**
	 *  Fetches and saves transactions for a given address from an external service.
	 */
	private function fetchAddressTxs(Payload $payload): void {
		/**
		 * Service constraint:
		 * the service can support 3 req/sec and up to 100 req/hour
		 * solutions would be:
		 * 1. upgrade the subscription to support for more
		 * 2. request for an update every 36 secconds. This
		 * 		would be more suitable for a cronjob approach
		 */

		$maxPage = 1;
		$page = 1;
		$block = null;
		$limit = 2000;
		$after = null;

		do {
			$res = $this->fetchService->fetchAddress(
				$payload->getAsset(),
				$payload->getAddress(),
				$limit,
				$after,
			);

			if ($block === null) {
				$block = BlockAddress::from(json_decode($res));
				$maxPage = ceil($block->getNTx() / $limit);
				$after = $block->getTxrefs()[count($block->getTxrefs()) -1]->getBlockHeight();
			} else {
				$block->addTxrefs(
					BlockAddress::from(json_decode($res))->getTxrefs()
				);
			}

			$page += 1;
		} while ($page <= $maxPage);

		$address = $this->addressRepository->findOrCreateOne(
			(new Address())
				->setAddress($block->getAddress())
				->setLastVerifiedAt(new \DateTime())
		);

		$txs = [];
		foreach ($block->getTxrefs() as $blockTx) {
			$tx = new Transaction();

			$tx->setConfirmations($blockTx->getConfirmations());
			$tx->setConfirmed($blockTx->getConfirmed());
			$tx->setHash($blockTx->getTxHash());
			$tx->setHeight($blockTx->getBlockHeight());
			$tx->setValue($blockTx->getValue());
			$tx->setAddress($address);

			$txs[] = $tx;
		}

		$this->transactionRepository->batchCreateTx($txs);

		return;
	}
}