<?php

namespace App\Service;

use App\Repository\TacheRepository;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\Notification;
use App\Repository\PreferenceAlerteRepository;

class AlertEngineService
{
    public function __construct(
        private TacheRepository $tacheRepository,
        private NotificationRepository $notificationRepository,
        private PreferenceAlerteRepository $preferenceRepo,
        private EntityManagerInterface $em,
        private MailerInterface $mailer
    ) {}

    public function runForUser(int $userId): void
    {
        date_default_timezone_set('Africa/Tunis');

        $now = new \DateTime();
        $oneDayAgo = (new \DateTime())->modify('-1 day');

        $activeStatuses = ['A_FAIRE', 'EN_COURS', 'EN_RETARD', 'PAUSED'];

        // 1️⃣ Fetch active tasks for this user only
        $tasks = $this->tacheRepository->createQueryBuilder('t')
            ->join('t.user', 'u')
            ->andWhere('u.id = :userId')
            ->andWhere('t.statut IN (:statuses)')
            ->setParameter('userId', $userId)
            ->setParameter('statuses', $activeStatuses)
            ->getQuery()
            ->getResult();

        if (!$tasks) {
            return;
        }

        // 2️⃣ Fetch recent notifications for this user (last 24h only)
        $recentNotifications = $this->notificationRepository->createQueryBuilder('n')
            ->join('n.user', 'u')
            ->andWhere('u.id = :userId')
            ->andWhere('n.createdAt >= :oneDayAgo')
            ->setParameter('userId', $userId)
            ->setParameter('oneDayAgo', $oneDayAgo)
            ->getQuery()
            ->getResult();

        // 3️⃣ Index notifications in memory (taskId + type + email)
        $notificationIndex = [];

        foreach ($recentNotifications as $notif) {
            $taskId = $notif->getTache()->getId();
            $type = $notif->getType();
            $isEmail = $notif->getEmail();

            $notificationIndex[$taskId][$type][$isEmail ? 'email' : 'site'] = true;
        }

        // 4️⃣ Process tasks
        foreach ($tasks as $task) {

            $deadline = $task->getDateFin();
            if (!$deadline) {
                continue;
            }

            $remainingTime = $deadline->getTimestamp() - $now->getTimestamp();

            if ($remainingTime < 3600 && $remainingTime > 0) {
                $this->handleAlert($task, 'near', $notificationIndex);
            }

            if ($remainingTime < 0) {
                $this->handleAlert($task, 'overdue', $notificationIndex);
            }
        }

        $this->em->flush();
    }

    private function formatPriority(string $priority): string
    {
        return match ($priority) {
            'ELEVEE' => 'Haute',
            'MOYENNE' => 'Moyenne',
            'FAIBLE' => 'Basse',
            default => $priority,
        };
    }

    private function handleAlert($task, string $condition, array $notificationIndex): void
    {
        $user = $task->getUser();
        $taskId = $task->getId();

        $preference = $this->preferenceRepo->findOneBy(['etudiant' => $user]);
        $emailActive = $preference ? $preference->isEmailActif() : true;
        $siteNotifActive = $preference ? $preference->isSiteNotifActive() : true;

        $taskTitle = $task->getTitre() ?: 'Sans titre';
        $priority = $this->formatPriority($task->getPriorite() ?: 'MOYENNE');
        $deadline = $task->getDateFin()->format('d/m/Y H:i');

        if ($condition === 'near') {
            $message = "⏰ Rappel : La tâche \"$taskTitle\" (priorité $priority) expire bientôt ! Date limite : $deadline.";
            $type = 'INFO';
            $emailSubject = 'Rappel : tâche proche de l\'échéance';
        } else {
            $message = "⚠️ Alerte : La tâche \"$taskTitle\" (priorité $priority) est en retard ! Date limite était : $deadline.";
            $type = 'WARNING';
            $emailSubject = 'Tâche en retard';
        }

        // 🚀 In-App Notification (NO DB QUERY HERE)
        if ($siteNotifActive && empty($notificationIndex[$taskId][$type]['site'])) {

            $notification = new Notification();
            $notification->setUser($user)
                         ->setTache($task)
                         ->setMessage($message)
                         ->setType($type)
                         ->setEmail(false);

            $this->em->persist($notification);
        }

        // 🚀 Email Notification (NO DB QUERY HERE)
        if ($emailActive && empty($notificationIndex[$taskId][$type]['email'])) {

            $emailBody = $message . "\n\nDétails de la tâche :\n- Titre : $taskTitle\n- Priorité : $priority\n- Date limite : $deadline";

            if ($task->getDescription()) {
                $emailBody .= "\n- Description : " . $task->getDescription();
            }

            $emailObj = (new Email())
                ->from('tahayassinesnoussi05@gmail.com')
                ->to($user->getEmail())
                ->subject($emailSubject)
                ->text($emailBody);

            $this->mailer->send($emailObj);

            $notificationEmail = new Notification();
            $notificationEmail->setUser($user)
                              ->setTache($task)
                              ->setMessage($message)
                              ->setType($type)
                              ->setEmail(true);

            $this->em->persist($notificationEmail);
        }
    }
}