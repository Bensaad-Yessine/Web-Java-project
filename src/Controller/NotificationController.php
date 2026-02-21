<?php

namespace App\Controller;

use App\Repository\NotificationRepository;
use App\Repository\TacheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class NotificationController extends AbstractController
{
    #[Route('/notifications/fetch', name: 'notifications_fetch')]
    public function fetch(NotificationRepository $repo): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json([]);
        }

        // Get all notifications for user, newest first
        $notifications = $repo->findBy(
            ['user' => $user],
            ['createdAt' => 'DESC']
        );

        // Deduplicate: keep only the latest per task
        $latestPerTask = [];
        $generalNotifications = [];

        foreach ($notifications as $n) {
            $taskId = $n->getTache() ? $n->getTache()->getId() : null;
            if ($taskId) {
                // If we haven't stored this task yet, or this one is newer, keep it
                if (!isset($latestPerTask[$taskId]) || $latestPerTask[$taskId]->getCreatedAt() < $n->getCreatedAt()) {
                    $latestPerTask[$taskId] = $n;
                }
            } else {
                $generalNotifications[] = $n;
            }
        }

        // Merge and sort again
        $filtered = array_merge(array_values($latestPerTask), $generalNotifications);
        usort($filtered, fn($a, $b) => $b->getCreatedAt() <=> $a->getCreatedAt());

        $data = [];
        foreach ($filtered as $n) {
            $data[] = [
                'id' => $n->getId(),
                'message' => $n->getMessage(),
                'type' => $n->getType(),
                'taskId' => $n->getTache() ? $n->getTache()->getId() : null,
                'isRead' => $n->getIsRead(), // ✅ FIXED: use getIsRead() instead of isIsRead()
                'createdAt' => $n->getCreatedAt()->format('Y-m-d H:i'),
            ];
        }

        return $this->json($data);
    }

    #[Route('/notifications/mark-read/{id}', name: 'notifications_mark_read', methods: ['POST'])]
    public function markRead(NotificationRepository $repo, int $id, EntityManagerInterface $entityManager): JsonResponse
    {
        $notification = $repo->find($id);
        
        if (!$notification) {
            return $this->json(['success' => false, 'error' => 'Notification not found'], 404);
        }

        // Check if the notification belongs to the current user
        $user = $this->getUser();
        if ($notification->getUser() !== $user) {
            return $this->json(['success' => false, 'error' => 'Unauthorized'], 403);
        }

        try {
            $notification->setIsRead(true);
            $entityManager->flush();
            
            return $this->json(['success' => true]);
        } catch (\Exception $e) {
            return $this->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    #[Route('/task/finish/{id}', name: 'task_finish', methods: ['POST'])]
    public function finishTask(TacheRepository $repo, EntityManagerInterface $em, int $id): JsonResponse
    {
        $task = $repo->find($id);
        if (!$task) {
            return $this->json(['success' => false, 'error' => 'Task not found'], 404);
        }
        if ($task->getUser() !== $this->getUser()) {
            return $this->json(['success' => false, 'error' => 'Unauthorized'], 403);
        }
        $task->setStatut('TERMINE');
        $em->flush();
        return $this->json(['success' => true]);
    }

    #[Route('/task/abandon/{id}', name: 'task_abandon', methods: ['POST'])]
    public function abandonTask(TacheRepository $repo, EntityManagerInterface $em, int $id): JsonResponse
    {
        $task = $repo->find($id);
        if (!$task) {
            return $this->json(['success' => false, 'error' => 'Task not found'], 404);
        }
        if ($task->getUser() !== $this->getUser()) {
            return $this->json(['success' => false, 'error' => 'Unauthorized'], 403);
        }
        $task->setStatut('ABANDON');
        $em->flush();
        return $this->json(['success' => true]);
    }
}