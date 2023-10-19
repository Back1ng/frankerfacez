<?php declare(strict_types=1);

namespace Back1ng\FrankerFacez;

/**
 * make requests, get responses
 */
final class Client
{
    private \GuzzleHttp\Client $client;

    private string $url = 'https://api.frankerfacez.com';

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function sendGet(SendableGet $sendable): array
    {
        $url = sprintf("%s%s%s", $this->url, $sendable->getRoute(), $sendable->getParams());

        $response = $this->client->get($url);

        return json_decode($response->getBody()->getContents(), true);
    }
}