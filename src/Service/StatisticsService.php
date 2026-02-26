<?php
namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\StudentIntelligenceProfileRepository;

class StatisticsService
{
    public function __construct(
        private EntityManagerInterface $em,
        private StudentIntelligenceProfileRepository $profileRepo
    ) {}

    public function getUserStats(User $user): array
    {
        $taskRepo = $this->em->getRepository('App\Entity\Tache');

        // Helper for scalar counts by status
        $countByStatus = function(string $status) use ($taskRepo, $user): int {
            return (int) $taskRepo->createQueryBuilder('t')
                ->select('COUNT(t.id)')
                ->where('t.user = :user')
                ->andWhere('t.statut = :status')
                ->setParameter('user', $user)
                ->setParameter('status', $status)
                ->getQuery()
                ->getSingleScalarResult();
        };

        // Helper for scalar counts by priority
        $countByPriority = function(string $priority) use ($taskRepo, $user): int {
            return (int) $taskRepo->createQueryBuilder('t')
                ->select('COUNT(t.id)')
                ->where('t.user = :user')
                ->andWhere('t.priorite = :priority')
                ->setParameter('user', $user)
                ->setParameter('priority', $priority)
                ->getQuery()
                ->getSingleScalarResult();
        };

        // Total tasks
        $totalTasks = (int) $taskRepo->createQueryBuilder('t')
            ->select('COUNT(t.id)')
            ->where('t.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();

        // Counts by specific statuses
        $completed  = $countByStatus('TERMINE');
        $abandoned  = $countByStatus('ABANDON');
        $inProgress = $countByStatus('EN_COURS');
        $overdue    = $countByStatus('EN_RETARD');
        $paused     = $countByStatus('PAUSED');      // Added for completeness

        // High priority
        $highPriority = $countByPriority('ELEVEE');

        // ----- Notification counts -----
        $notifRepo = $this->em->getRepository('App\Entity\Notification');

        $unread = (int) $notifRepo->createQueryBuilder('n')
            ->select('COUNT(n.id)')
            ->where('n.user = :user')
            ->andWhere('n.isRead = false')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();

        $warnings = (int) $notifRepo->createQueryBuilder('n')
            ->select('COUNT(n.id)')
            ->where('n.user = :user')
            ->andWhere('n.type = :type')
            ->setParameter('user', $user)
            ->setParameter('type', 'WARNING')
            ->getQuery()
            ->getSingleScalarResult();

        $infos = (int) $notifRepo->createQueryBuilder('n')
            ->select('COUNT(n.id)')
            ->where('n.user = :user')
            ->andWhere('n.type = :type')
            ->setParameter('user', $user)
            ->setParameter('type', 'INFO')
            ->getQuery()
            ->getSingleScalarResult();

        // ----- Insights from the last profile (if any) -----
        $lastProfile = $this->profileRepo->findLastByUser($user);
        $insights = null;
        if ($lastProfile) {
            $insights = [
                'completionRate'           => $lastProfile->getCompletionRate(),
                'abandonmentRate'          => $lastProfile->getAbandonmentRate(),
                'averageStartDelayMinutes' => $lastProfile->getAverageStartDelayMinutes(),
                'pauseFrequency'           => $lastProfile->getPauseFrequency(),
                'mostProductiveHour'       => $lastProfile->getMostProductiveHour(),
                'mostProductiveDayOfWeek'  => $lastProfile->getMostProductiveDayOfWeek(),
                'abandonmentRateByType'    => $lastProfile->getAbandonmentRateByType(),
                'completionRateByType'     => $lastProfile->getCompletionRateByType(),
                'averageStartDelayByType'  => $lastProfile->getAverageStartDelayByType(),
                'weeklyProductivitySummary'=> $lastProfile->getWeeklyProductivitySummary(),
                'behavioralAdvice'         => $lastProfile->getBehavioralAdvice(),
            ];
        }

        return [
            'counts' => [
                'total'          => $totalTasks,
                'completed'      => $completed,
                'abandoned'      => $abandoned,
                'inProgress'     => $inProgress,
                'overdue'        => $overdue,
                'paused'         => $paused,
                'highPriority'   => $highPriority,
                'unreadNotifications' => $unread,
                'warningNotifications' => $warnings,
                'infoNotifications'    => $infos,
            ],
            'insights' => $insights,
        ];
    }
}