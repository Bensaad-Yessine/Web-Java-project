<?php

namespace App\Service;

use App\Entity\Tache;
use App\Entity\StudentIntelligenceProfile;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Doctrine\ORM\EntityManagerInterface;

class TaskPredictorService
{
    private string $pythonScript;
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em, string $pythonScriptPath = __DIR__ . '/../../python_models/predict_logreg.py')
    {
        $this->pythonScript = $pythonScriptPath;
        $this->em = $em;
    }

    /**
     * Predict completion probability based on task info and user profile
     */
    public function predict(Tache $tache): float
    {
        // Get the user's latest profile
        $user = $tache->getUser();
        /** @var StudentIntelligenceProfile|null $profile */
        $profile = $this->em->getRepository(StudentIntelligenceProfile::class)
                            ->findOneBy(['user' => $user], ['analyzedAt' => 'DESC']);

        // Prepare raw data exactly as it comes from the database
        $rawData = [
            // Task data
            'task' => [
                'id' => $tache->getId(),
                'type' => $tache->getType(),
                'priorite' => $tache->getPriorite(),
                'date_debut' => $tache->getDateDebut() ? $tache->getDateDebut()->format('Y-m-d H:i:s') : null,
                'date_fin' => $tache->getDateFin() ? $tache->getDateFin()->format('Y-m-d H:i:s') : null,
                'date_echeance' => $tache->getDateEcheance() ? $tache->getDateEcheance()->format('Y-m-d H:i:s') : null,
                'statut' => $tache->getStatut(),
                'duree_estimee' => $tache->getDureeEstimee(),
            ],
            
            // User profile data (if available)
            'profile' => $profile ? [
                'completion_rate' => $profile->getCompletionRate(),
                'abandonment_rate' => $profile->getAbandonmentRate(),
                'average_start_delay_minutes' => $profile->getAverageStartDelayMinutes(),
                'average_completion_duration_minutes' => $profile->getAverageCompletionDurationMinutes(),
                'pause_frequency' => $profile->getPauseFrequency(),
                'most_productive_hour' => $profile->getMostProductiveHour(),
                'most_productive_day_of_week' => $profile->getMostProductiveDayOfWeek(),
                'completion_rate_by_type' => $profile->getCompletionRateByType(),
                'abandonment_rate_by_type' => $profile->getAbandonmentRateByType(),
                'average_start_delay_by_type' => $profile->getAverageStartDelayByType(),
            ] : null
        ];

        // Convert to JSON
        $jsonData = json_encode($rawData);

        // Call Python script
        $process = new Process([
            'C:\\Users\\Dell\\anaconda3\\python.exe',
            $this->pythonScript,
            $jsonData
        ]);
        $process->run();

        if (!$process->isSuccessful()) {
            // Log the error output for debugging
            error_log('Python error: ' . $process->getErrorOutput());
            throw new ProcessFailedException($process);
        }

        $output = trim($process->getOutput());
        return (float)$output;
    }
}