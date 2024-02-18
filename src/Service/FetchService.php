<?php

namespace App\Service;

use GuzzleHttp\Client;
use Psr\Http\Message\StreamInterface;

class FetchService {

	private Client $client;

	public function __construct() {
		$this->client = new Client([
			'base_uri' => 'https://api.blockcypher.com/v1/',
			'timeout' => 3,
		]);
	}

	public function fetchAddress(
		string $asset = 'btc',
		string $address,
		int $limit,
		int|null $after = null,
	): StreamInterface {
		$response = $this->client->request(
			'GET',
			is_null($after)
				? sprintf(
					'%s/main/addrs/%s?limit=%d',
					$asset,
					$address,
					$limit,
				)
				: sprintf(
					'%s/main/addrs/%s?limit=%d&after=%s',
					$asset,
					$address,
					$limit,
					$after
				)
		);

		return $response->getBody();
	}
}