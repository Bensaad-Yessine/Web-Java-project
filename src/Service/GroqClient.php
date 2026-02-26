<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GroqClient
{
    public function __construct(
        private HttpClientInterface $http,
        private string $apiKey,
        private string $model,
    ) {}

    public function chatJson(array $messages, float $temperature = 0.4, int $maxTokens = 700): array
    {
        $response = $this->http->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type'  => 'application/json',
            ],
            'json' => [
                'model' => $this->model,
                'messages' => $messages,
                'temperature' => $temperature,
                'max_tokens' => $maxTokens,
                'response_format' => ['type' => 'json_object'],
            ],
            'timeout' => 30,
        ]);

        $data = $response->toArray(false);
        $content = $data['choices'][0]['message']['content'] ?? '';

        $parsed = json_decode($content, true);
        if (!is_array($parsed)) {
            throw new \RuntimeException('Groq returned non-JSON: ' . $content);
        }

        return $parsed;
    }
}