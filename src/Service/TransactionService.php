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

	public function getAddressTransactions(Payload $payload): Result {

		$address = $this->addressRepository->find(
			$payload->getAddress(),
		);

		/**
		 * @var Result|null $result
		 */
		$result = null;

		if (is_null($address)) {
			$this->fetchAddressTxs($payload);
		} else {
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

	private function fetchAddressTxs(Payload $payload): void {
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