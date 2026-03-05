<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AbandonRiskService
{
    public function __construct(private HttpClientInterface $client) {}

    public function predict(array $features): array
    {
        $response = $this->client->request('POST', 'http://127.0.0.1:8002/predict-abandon', [
            'json' => $features,
            'timeout' => 10,
        ]);

        return $response->toArray();
    }
}