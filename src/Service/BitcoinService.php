<?php

namespace App\Service;

use App\Type\BtcBlock;

class BitcoinService {

	public function __construct(
		private readonly FetchService $fetchService
	) {}

	public function fetchAddressTx(string $address) {
		$res = $this->fetchService->fetchBitcoinAddress($address);
		$btcBlock = BtcBlock::from(json_decode($res));
		return $btcBlock;
	}
}