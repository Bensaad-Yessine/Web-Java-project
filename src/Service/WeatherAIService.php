<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherAIService
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getWeatherAndAdvice(): array
    {
        $weatherKey = $_ENV['OPENWEATHER_API_KEY'] ?? null;
        $groqKey = $_ENV['GROQ_API_KEY'] ?? null;

        // Validate API keys
        if (empty($weatherKey)) {
            return [
                'weather' => [
                    'temperature' => '--',
                    'description' => 'Clé API météo non configurée',
                    'humidity' => '--'
                ],
                'ai' => 'Conseil IA indisponible : erreur de configuration'
            ];
        }

        // 1️⃣ GET WEATHER (HttpClient is fine for OpenWeather - small responses)
        try {
            $weatherResponse = $this->httpClient->request(
                'GET',
                "https://api.openweathermap.org/data/2.5/weather",
                [
                    'query' => [
                        'q' => 'Tunis',
                        'appid' => $weatherKey,
                        'units' => 'metric'
                    ]
                ]
            );

            $weather = $weatherResponse->toArray();
        } catch (\Exception $e) {
            error_log('Erreur API météo : ' . $e->getMessage());
            return [
                'weather' => [
                    'temperature' => '--',
                    'description' => 'Service météo indisponible',
                    'humidity' => '--'
                ],
                'ai' => 'Conseil IA indisponible : erreur de données météo'
            ];
        }

        $temp = $weather['main']['temp'] ?? '--';
        $description = $weather['weather'][0]['description'] ?? 'Inconnu';
        $humidity = $weather['main']['humidity'] ?? '--';
        $wind = $weather['wind']['speed'] ?? 0;

        // 2️⃣ BUILD PROMPT
        $prompt = "
        Tu es un assistant intelligent pour étudiants.

        Données météo :
        Température : $temp °C
        Description : $description
        Humidité : $humidity %
        Vitesse du vent : $wind m/s

        Donne :
        1) Une recommandation d'étude
        2) Un conseil vestimentaire
        3) Une suggestion de productivité

        Maximum 120 mots. Réponds en français.

        Format JSON :
        {
        \"studyAdvice\":\"...\",
        \"clothingAdvice\":\"...\",
        \"productivityAdvice\":\"...\"
        }
        ";

        // 3️⃣ CALL GROQ USING CURL (Same pattern as BehaviorAnalysisService)
        $aiResponse = $this->callGroqApi($groqKey, $prompt);

        return [
            'weather' => [
                'temperature' => $temp,
                'description' => $description,
                'humidity' => $humidity
            ],
            'ai' => $aiResponse
        ];
    }

    /**
     * Call Groq API using cURL (avoids Symfony HttpClient body size limits)
     */
    private function callGroqApi(?string $apiKey, string $prompt): string
    {
        if (empty($apiKey)) {
            return 'Conseil IA indisponible : clé API non configurée';
        }

        try {
            $ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
            
            if ($ch === false) {
                error_log('Échec initialisation cURL dans WeatherService');
                return 'Conseil IA temporairement indisponible';
            }
            
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_HTTPHEADER => [
                    'Authorization: Bearer ' . $apiKey,
                    'Content-Type: application/json',
                ],
                CURLOPT_POSTFIELDS => json_encode([
                    'model' => 'llama-3.1-8b-instant',
                    'messages' => [
                        ['role' => 'system', 'content' => 'Tu es un assistant pour étudiants tunisiens. Réponds UNIQUEMENT avec le JSON demandé, sans texte avant ou après. Jamais de markdown.'],
                        ['role' => 'user', 'content' => $prompt]
                    ],
                    'temperature' => 0.3, // Lower temperature for more strict formatting
                    'max_tokens' => 256,
                ]),
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => 0,
            ]);

            $response = curl_exec($ch);
            
            if ($response === false) {
                $error = curl_error($ch);
                curl_close($ch);
                error_log('Erreur cURL dans WeatherService : ' . $error);
                return 'Conseil IA temporairement indisponible';
            }
            
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode !== 200) {
                error_log('Erreur HTTP Groq API ' . $httpCode . ' dans WeatherService : ' . substr($response, 0, 500));
                return 'Conseil IA temporairement indisponible';
            }

            $data = json_decode($response, true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                error_log('Erreur de parsing JSON dans WeatherService : ' . json_last_error_msg());
                return 'Conseil IA temporairement indisponible';
            }

            $content = $data['choices'][0]['message']['content'] ?? '';
            
            // ⭐ BETTER PARSING: Extract JSON from markdown or text
            $content = $this->extractJsonFromText($content);

            // Try to parse as JSON
            $parsed = json_decode($content, true);
            
            if (json_last_error() === JSON_ERROR_NONE && isset($parsed['studyAdvice'])) {
                return sprintf(
                    "📚 Étude : %s\n👕 Tenue : %s\n⚡ Productivité : %s",
                    $parsed['studyAdvice'],
                    $parsed['clothingAdvice'],
                    $parsed['productivityAdvice']
                );
            }

            // Fallback: return cleaned content
            return $content ?: 'Aucun conseil généré';

        } catch (\Exception $e) {
            error_log('Exception dans WeatherService callGroqApi : ' . $e->getMessage());
            return 'Conseil IA temporairement indisponible';
        }
    }

    /**
     * Extract JSON from text that may contain markdown or extra content
     */
    private function extractJsonFromText(string $text): string
    {
        // Remove markdown code blocks
        $text = preg_replace('/```json\s*/', '', $text);
        $text = preg_replace('/```\s*/', '', $text);
        
        // Try to find JSON object pattern
        if (preg_match('/\{.*\}/s', $text, $matches)) {
            return $matches[0];
        }
        
        return trim($text);
    }
}