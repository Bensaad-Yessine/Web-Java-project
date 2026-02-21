<?php
namespace App\Service;

use App\Repository\TacheRepository;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\Notification;
use App\Repository\PreferenceAlerteRepository;
use App\Repository\SuiviTacheRepository;

class AlertEngineService
{
    public function __construct(
        private TacheRepository $tacheRepository,
        private NotificationRepository $notificationRepository,
        private PreferenceAlerteRepository $preferenceRepo,
        private SuiviTacheRepository $suiviRepository,
        private EntityManagerInterface $em,
        private MailerInterface $mailer
    ) {}

    public function run(): void
    {
        // --- Active statuses (all users)
        $activeStatuses = ['A_FAIRE', 'EN_COURS', 'EN_RETARD', 'PAUSED'];

        // Fetch all active tasks for all users
        $tasks = $this->tacheRepository->createQueryBuilder('t')
            ->andWhere('t.statut IN (:statuses)')
            ->setParameter('statuses', $activeStatuses)
            ->orderBy('t.id', 'DESC')
            ->getQuery()
            ->getResult();

        foreach ($tasks as $task) {
            $this->processTask($task);
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

    private function processTask($task): void
    {
        $now = new \DateTime();
        $status = $task->getStatut();

        // Skip if task is finished or abandoned
        if ($status === 'TERMINE' || $status === 'ABANDON') {
            return;
        }

        $deadline = $task->getDateFin();
        $remainingTime = $deadline->getTimestamp() - $now->getTimestamp();

        // Alert if less than 1 hour remaining (and not yet passed)
        if ($remainingTime < 3600 && $remainingTime > 0) {
            $this->createAlert($task, 'near');
        }

        // Alert if deadline passed and not finished
        if ($remainingTime < 0) {
            $this->createAlert($task, 'overdue');
        }
    }

    private function createAlert($task, string $condition): void
    {
        $user = $task->getUser();
        $preference = $this->preferenceRepo->findOneBy(['etudiant' => $user]);
        $emailActive = $preference ? $preference->isEmailActif() : true;
        $siteNotifActive = $preference ? $preference->isSiteNotifActive() : true;

        $taskTitle = $task->getTitre() ?: 'Sans titre';
        $priority = $this->formatPriority($task->getPriorite() ?: 'MOYENNE');
        $deadline = $task->getDateFin()->format('d/m/Y H:i');

        if ($condition === 'near') {
            $message = sprintf(
                "⏰ Rappel : La tâche \"%s\" (priorité %s) expire bientôt ! Date limite : %s.",
                $taskTitle,
                $priority,
                $deadline
            );
            $type = 'INFO';
            $emailSubject = 'Rappel : tâche proche de l\'échéance';
        } else { // overdue
            $message = sprintf(
                "⚠️ Alerte : La tâche \"%s\" (priorité %s) est en retard ! Date limite était : %s.",
                $taskTitle,
                $priority,
                $deadline
            );
            $type = 'WARNING';
            $emailSubject = 'Tâche en retard';
        }

        // In-App Notification (with duplicate check)
        if ($siteNotifActive) {
            $existing = $this->notificationRepository->findOneBy([
                'user' => $user,
                'tache' => $task,
                'type' => $type,
            ], ['createdAt' => 'DESC']);

            $oneDayAgo = (new \DateTime())->modify('-1 day');
            if (!$existing || $existing->getCreatedAt() < $oneDayAgo) {
                $notification = new Notification();
                $notification->setUser($user);
                $notification->setTache($task);
                $notification->setMessage($message);
                $notification->setType($type);
                $this->em->persist($notification);
            }
        }

        // Email
        if ($emailActive) {
            $emailBody = $message . "\n\n";
            $emailBody .= "Détails de la tâche :\n";
            $emailBody .= "- Titre : " . $taskTitle . "\n";
            $emailBody .= "- Priorité : " . $priority . "\n";
            $emailBody .= "- Date limite : " . $deadline . "\n";
            if ($task->getDescription()) {
                $emailBody .= "- Description : " . $task->getDescription() . "\n";
            }

            $email = (new Email())
                ->from('tahayassinesnoussi05@gmail.com')
                ->to('tahayassinesnoussi05@gmail.com')
                ->subject($emailSubject)
                ->text($emailBody);

            $this->mailer->send($email);
        }
    }
}