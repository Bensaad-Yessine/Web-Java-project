<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\Message;
use App\Entity\User;
use App\Repository\ConversationRepository;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/messaging')]
#[IsGranted('ROLE_USER')]
class MessagingController extends AbstractController
{
    public function __construct(
        private UserRepository $userRepository,
        private ConversationRepository $conversationRepository,
        private MessageRepository $messageRepository,
        private EntityManagerInterface $entityManager
    ) {}

    /**
     * Search students by nom, prenom, or email
     */
    #[Route('/search', name: 'messaging_search', methods: ['POST'])]
    public function search(Request $request): JsonResponse
    {
        $query = trim($request->request->get('query', ''));
        $currentUser = $this->getUser();

        if (strlen($query) < 2) {
            return $this->json(['results' => []]);
        }

        $results = $this->userRepository->createQueryBuilder('u')
            ->andWhere('(LOWER(u.nom) LIKE LOWER(:query) OR LOWER(u.prenom) LIKE LOWER(:query) OR LOWER(u.email) LIKE LOWER(:query))')
            ->andWhere('u.id != :currentUserId')
            ->setParameter('query', '%' . $query . '%')
            ->setParameter('currentUserId', $currentUser->getId())
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();

        $users = array_map(function (User $user) use ($currentUser) {
            $conversation = $this->conversationRepository->findBetweenUsers($currentUser, $user);
            return [
                'id' => $user->getId(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'email' => $user->getEmail(),
                'fullName' => $user->getPrenom() . ' ' . $user->getNom(),
                'profilePic' => $user->getProfilePic(),
                'conversationId' => $conversation?->getId(),
            ];
        }, $results);

        return $this->json(['results' => $users]);
    }

    /**
     * Get all conversations for the current user
     */
    #[Route('/conversations', name: 'messaging_conversations', methods: ['GET'])]
    public function getConversations(): JsonResponse
    {
        $currentUser = $this->getUser();
        $conversations = $this->conversationRepository->findByUser($currentUser);

        $data = array_map(function (Conversation $conv) use ($currentUser) {
            $otherUser = $conv->getOtherUser($currentUser);
            $lastMessage = $conv->getLastMessage();
            $unreadCount = $this->messageRepository->createQueryBuilder('m')
                ->select('COUNT(m.id)')
                ->andWhere('m.conversation = :conv')
                ->andWhere('m.sender != :currentUser')
                ->andWhere('m.isRead = false')
                ->setParameter('conv', $conv)
                ->setParameter('currentUser', $currentUser)
                ->getQuery()
                ->getSingleScalarResult();

            return [
                'id' => $conv->getId(),
                'otherUser' => [
                    'id' => $otherUser->getId(),
                    'name' => $otherUser->getPrenom() . ' ' . $otherUser->getNom(),
                    'profilePic' => $otherUser->getProfilePic(),
                ],
                'lastMessage' => $lastMessage ? [
                    'content' => $lastMessage->getContent(),
                    'sender' => $lastMessage->getSender()->getId(),
                    'createdAt' => $lastMessage->getCreatedAt()->format('c'),
                ] : null,
                'updatedAt' => $conv->getUpdatedAt()?->format('c') ?? $conv->getCreatedAt()->format('c'),
                'unreadCount' => (int)$unreadCount,
            ];
        }, $conversations);

        return $this->json(['conversations' => $data]);
    }

    /**
     * Get messages for a specific conversation
     */
    #[Route('/conversation/{id}/messages', name: 'messaging_get_messages', methods: ['GET'])]
    public function getMessages(int $id, Request $request): JsonResponse
    {
        $currentUser = $this->getUser();
        $conversation = $this->conversationRepository->find($id);

        if (!$conversation) {
            return $this->json(['error' => 'Conversation not found'], 404);
        }

        // Check if user has access to this conversation
        if ($conversation->getUser1()->getId() !== $currentUser->getId() && $conversation->getUser2()->getId() !== $currentUser->getId()) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        $offset = $request->query->getInt('offset', 0);
        $messages = $this->messageRepository->findByConversation($conversation, 50, $offset);

        // Mark messages as read
        $unreadMessages = $this->messageRepository->findUnreadMessages($conversation, $currentUser);
        foreach ($unreadMessages as $message) {
            $message->setIsRead(true);
            $message->setReadAt(new \DateTimeImmutable());
        }
        if (!empty($unreadMessages)) {
            $this->entityManager->flush();
        }

        $data = array_map(function (Message $msg) {
            return [
                'id' => $msg->getId(),
                'content' => $msg->getContent(),
                'sender' => [
                    'id' => $msg->getSender()->getId(),
                    'name' => $msg->getSender()->getPrenom() . ' ' . $msg->getSender()->getNom(),
                ],
                'createdAt' => $msg->getCreatedAt()->format('c'),
                'isRead' => $msg->isRead(),
                'readAt' => $msg->getReadAt()?->format('c'),
                'updatedAt' => $msg->getUpdatedAt()?->format('c'),
                'isEdited' => $msg->isEdited(),
            ];
        }, array_reverse($messages)); // Reverse to show newest last

        return $this->json(['messages' => $data]);
    }

    /**
     * Send a message
     */
    #[Route('/conversation/{id}/send', name: 'messaging_send', methods: ['POST'])]
    public function sendMessage(int $id, Request $request): JsonResponse
    {
        $currentUser = $this->getUser();
        $conversation = $this->conversationRepository->find($id);

        if (!$conversation) {
            return $this->json(['error' => 'Conversation not found'], 404);
        }

        // Check if user has access
        if ($conversation->getUser1()->getId() !== $currentUser->getId() && $conversation->getUser2()->getId() !== $currentUser->getId()) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        $content = trim($request->request->get('content', ''));

        if (empty($content)) {
            return $this->json(['error' => 'Message cannot be empty'], 400);
        }

        if (strlen($content) > 5000) {
            return $this->json(['error' => 'Message is too long'], 400);
        }

        // Create message
        $message = new Message();
        $message->setConversation($conversation);
        $message->setSender($currentUser);
        $message->setContent($content);

        // Update conversation timestamp
        $conversation->setUpdatedAt(new \DateTimeImmutable());

        $this->entityManager->persist($message);
        $this->entityManager->persist($conversation);
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => [
                'id' => $message->getId(),
                'content' => $message->getContent(),
                'sender' => [
                    'id' => $message->getSender()->getId(),
                    'name' => $message->getSender()->getPrenom() . ' ' . $message->getSender()->getNom(),
                ],
                'createdAt' => $message->getCreatedAt()->format('c'),
                'isRead' => $message->isRead(),
                'readAt' => $message->getReadAt()?->format('c'),
                'updatedAt' => $message->getUpdatedAt()?->format('c'),
                'isEdited' => $message->isEdited(),
            ],
        ]);
    }

    /**
     * Edit a message (sender only)
     */
    #[Route('/message/{id}/edit', name: 'messaging_edit_message', methods: ['POST'])]
    public function editMessage(int $id, Request $request): JsonResponse
    {
        $currentUser = $this->getUser();
        $message = $this->messageRepository->find($id);

        if (!$message) {
            return $this->json(['error' => 'Message not found'], 404);
        }

        if ($message->getSender()->getId() !== $currentUser->getId()) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        $content = trim($request->request->get('content', ''));

        if (empty($content)) {
            return $this->json(['error' => 'Message cannot be empty'], 400);
        }

        if (strlen($content) > 5000) {
            return $this->json(['error' => 'Message is too long'], 400);
        }

        $message->setContent($content);
        $message->setIsEdited(true);
        $message->setUpdatedAt(new \DateTimeImmutable());

        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => [
                'id' => $message->getId(),
                'content' => $message->getContent(),
                'createdAt' => $message->getCreatedAt()->format('c'),
                'isRead' => $message->isRead(),
                'readAt' => $message->getReadAt()?->format('c'),
                'updatedAt' => $message->getUpdatedAt()?->format('c'),
                'isEdited' => $message->isEdited(),
            ],
        ]);
    }

    /**
     * Delete a message (sender only)
     */
    #[Route('/message/{id}/delete', name: 'messaging_delete_message', methods: ['POST'])]
    public function deleteMessage(int $id): JsonResponse
    {
        $currentUser = $this->getUser();
        $message = $this->messageRepository->find($id);

        if (!$message) {
            return $this->json(['error' => 'Message not found'], 404);
        }

        if ($message->getSender()->getId() !== $currentUser->getId()) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        $this->entityManager->remove($message);
        $this->entityManager->flush();

        return $this->json(['success' => true]);
    }

    /**
     * Start a conversation with a user
     */
    #[Route('/start/{userId}', name: 'messaging_start', methods: ['POST'])]
    public function startConversation(int $userId): JsonResponse
    {
        $currentUser = $this->getUser();
        $otherUser = $this->userRepository->find($userId);

        if (!$otherUser) {
            return $this->json(['error' => 'User not found'], 404);
        }

        if ($otherUser->getId() === $currentUser->getId()) {
            return $this->json(['error' => 'Cannot start conversation with yourself'], 400);
        }

        $conversation = $this->conversationRepository->findOrCreateConversation($currentUser, $otherUser);

        return $this->json([
            'success' => true,
            'conversationId' => $conversation->getId(),
        ]);
    }

    /**
     * Get unread message count
     */
    #[Route('/unread-count', name: 'messaging_unread_count', methods: ['GET'])]
    public function getUnreadCount(): JsonResponse
    {
        $currentUser = $this->getUser();
        $unreadCount = $this->messageRepository->countUnreadMessages($currentUser);

        return $this->json(['unreadCount' => (int)$unreadCount]);
    }

    /**
     * Check for new messages since a given message ID (optimized for polling)
     */
    #[Route('/conversation/{id}/check-new', name: 'messaging_check_new', methods: ['GET'])]
    public function checkNewMessages(int $id, Request $request): JsonResponse
    {
        $currentUser = $this->getUser();
        $conversation = $this->conversationRepository->find($id);

        if (!$conversation) {
            return $this->json(['error' => 'Conversation not found'], 404);
        }

        // Check if user has access
        if ($conversation->getUser1()->getId() !== $currentUser->getId() && $conversation->getUser2()->getId() !== $currentUser->getId()) {
            return $this->json(['error' => 'Unauthorized'], 403);
        }

        $lastMessageId = $request->query->getInt('lastMessageId', 0);

        // Get only messages after the last known message ID
        $newMessages = $this->messageRepository->createQueryBuilder('m')
            ->andWhere('m.conversation = :conv')
            ->andWhere('m.id > :lastId')
            ->setParameter('conv', $conversation)
            ->setParameter('lastId', $lastMessageId)
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();

        // Mark new messages from other user as read
        $unreadMessages = array_filter($newMessages, function (Message $msg) use ($currentUser) {
            return $msg->getSender()->getId() !== $currentUser->getId() && !$msg->isRead();
        });

        foreach ($unreadMessages as $message) {
            $message->setIsRead(true);
            $message->setReadAt(new \DateTimeImmutable());
        }

        if (!empty($unreadMessages)) {
            $this->entityManager->flush();
        }

        $data = array_map(function (Message $msg) {
            return [
                'id' => $msg->getId(),
                'content' => $msg->getContent(),
                'sender' => [
                    'id' => $msg->getSender()->getId(),
                    'name' => $msg->getSender()->getPrenom() . ' ' . $msg->getSender()->getNom(),
                ],
                'createdAt' => $msg->getCreatedAt()->format('c'),
                'isRead' => $msg->isRead(),
                'readAt' => $msg->getReadAt()?->format('c'),
                'updatedAt' => $msg->getUpdatedAt()?->format('c'),
                'isEdited' => $msg->isEdited(),
            ];
        }, $newMessages);

        return $this->json(['messages' => $data, 'hasNew' => !empty($newMessages)]);
    }
}
