<?php

namespace App\Controller;

use App\Service\BrevoEmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class TestEmailController extends AbstractController
{
    #[Route('/test-brevo', name: 'test_brevo', methods: ['GET'])]
    public function test(BrevoEmailService $brevo): JsonResponse
    {
        $result = $brevo->sendEmail(
            'adammbi721@gmail.com', // change si tu veux
            'Test Brevo API',
            '<p>Email envoyé via Brevo API KEY ✅</p>'
        );

        return $this->json($result);
    }
}