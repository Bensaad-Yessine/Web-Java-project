<?php

namespace App\Controller;

use App\Service\StudentChatbotService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/chatbot')]
class ChatbotController extends AbstractController
{
    #[Route('/send', name: 'chatbot_send', methods: ['POST'])]
    public function sendMessage(Request $request, StudentChatbotService $chatbotService): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->json(['success' => false, 'error' => 'User not authenticated'], 401);
        }

        $data = json_decode($request->getContent(), true);
        $message = $data['message'] ?? '';

        if (empty(trim($message))) {
            return $this->json(['success' => false, 'error' => 'Message cannot be empty'], 400);
        }

        // Limite la longueur du message
        if (strlen($message) > 1000) {
            return $this->json(['success' => false, 'error' => 'Message is too long (max 1000 characters)'], 400);
        }

        // Obtient la réponse du chatbot
        $response = $chatbotService->chat($user, $message);

        return $this->json($response);
    }
}
