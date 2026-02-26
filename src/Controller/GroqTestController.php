<?php

namespace App\Controller;

use App\Service\GroqClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GroqTestController extends AbstractController
{
    #[Route('/api/groq-test', name: 'api_groq_test', methods: ['GET'])]
    public function test(GroqClient $groq): JsonResponse
    {
        $messages = [
            ['role' => 'system', 'content' => 'Return ONLY JSON: {"ok": true, "text": "..."}'],
            ['role' => 'user', 'content' => 'Say hello in French in field "text".'],
        ];

        $json = $groq->chatJson($messages);

        return $this->json($json);
    }
}