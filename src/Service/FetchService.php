<?php

namespace App\Service;

use GuzzleHttp\Client;

class FetchService {

	private Client $client;

	public function __construct() {
		$this->client = new Client([
			'base_uri' => 'https://api.blockcypher.com/v1/',
			'timeout' => 3,
		]);
	}

	public function fetchBitcoinAddress(string $address) {
		$response = $this->client->request(
			'GET',
			sprintf('btc/main/blocks/%s', $address)
		);

		return $response->getBody();
	}
}