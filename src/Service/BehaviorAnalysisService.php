<?php

namespace App\Service;

use App\Entity\StudentIntelligenceProfile;
use App\Entity\User;
use App\Repository\StudentIntelligenceProfileRepository;
use App\Repository\SuiviTacheRepository;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;

class BehaviorAnalysisService
{
    public function __construct(
        private EntityManagerInterface $em,
        private TacheRepository $tacheRepository,
        private SuiviTacheRepository $suiviRepository,
        private StudentIntelligenceProfileRepository $profileRepository
    ) {}

    /**
     * Returns a StudentIntelligenceProfile object (used by controller)
     */
    public function getOrComputeProfile(User $user): StudentIntelligenceProfile
    {
        try {
            $lastProfile = $this->profileRepository->findLastByUser($user);
            $now = new \DateTime();

            // If no profile exists OR profile is older than 7 days, compute new one
            if (!$lastProfile || $now->diff($lastProfile->getAnalyzedAt())->days >= 7) {
                return $this->computeAndSaveProfile($user, $lastProfile?->getAnalyzedAt());
            }

            // Return existing profile if it's recent
            return $lastProfile;

        } catch (\Throwable $e) {
            error_log('ERROR in getOrComputeProfile: ' . $e->getMessage());
            throw $e;
        }
    }

    private function computeAndSaveProfile(User $user, ?\DateTime $since = null): StudentIntelligenceProfile
    {
        // Get tasks and suivis since last analysis
        $tasks = $this->tacheRepository->findByUserSince($user, $since) ?? [];
        $suivis = $this->suiviRepository->findByUserSince($user, $since) ?? [];

        // Compute metrics
        $metrics = $this->computeBehaviorMetrics($tasks, $suivis);
        
        // Get AI insights
        $aiInsights = $this->callAiApi($metrics);

        // Save and return profile
        return $this->saveProfile($user, $metrics, $aiInsights);
    }

    private function computeBehaviorMetrics(array $tasks, array $suivis): array
    {
        $totalTasks = count($tasks);
        if ($totalTasks === 0) {
            return [
                'completionRate' => 0,
                'abandonmentRate' => 0,
                'averageStartDelayMinutes' => 0,
                'pauseFrequency' => 0,
                'mostProductiveHour' => null,
                'mostProductiveDayOfWeek' => null,
                'abandonmentRateByType' => [],
                'completionRateByType' => [],
                'averageStartDelayByType' => [],
            ];
        }

        // Abandonment rate
        $abandonedTasks = array_filter($tasks, fn($t) =>
            $t->getStatut() === 'ABANDON' || 
            ($t->getDateFin() < new \DateTime() && $t->getStatut() !== 'TERMINE')
        );
        $abandonmentRate = count($abandonedTasks) / $totalTasks;

        // Completion rate
        $completedTasks = array_filter($tasks, fn($t) => $t->getStatut() === 'TERMINE');
        $completionRate = count($completedTasks) / $totalTasks;

        // Average start delay (minutes)
        $startDelays = [];
        foreach ($tasks as $task) {
            $taskSuivis = array_filter($suivis, fn($s) =>
                $s->getTache()->getId() === $task->getId() &&
                $s->getNouveauStatut() === 'EN_COURS'
            );

            if ($taskSuivis) {
                $firstStart = min(array_map(fn($s) => $s->getDateAction()->getTimestamp(), $taskSuivis));
                $delay = ($firstStart - $task->getDateDebut()->getTimestamp()) / 60;
                $startDelays[] = max(0, $delay);
            }
        }
        $averageStartDelayMinutes = $startDelays ? array_sum($startDelays) / count($startDelays) : 0;

        // Pause frequency
        $pauseCount = count(array_filter($suivis, fn($s) => $s->getNouveauStatut() === 'PAUSED'));
        $pauseFrequency = $pauseCount / $totalTasks;

        // Most productive hour & day
        $hourCounts = [];
        $dayCounts = [];
        foreach ($suivis as $s) {
            if (in_array($s->getNouveauStatut(), ['EN_COURS', 'TERMINE'])) {
                $hour = (int)$s->getDateAction()->format('H');
                $day = (int)$s->getDateAction()->format('N');
                $hourCounts[$hour] = ($hourCounts[$hour] ?? 0) + 1;
                $dayCounts[$day] = ($dayCounts[$day] ?? 0) + 1;
            }
        }
        $mostProductiveHour = $hourCounts ? (int)array_search(max($hourCounts), $hourCounts) : null;
        $mostProductiveDayOfWeek = $dayCounts ? (int)array_search(max($dayCounts), $dayCounts) : null;

        // Task-Type Metrics
        $types = ['MANUEL', 'REUNION', 'REVISION', 'SANTE', 'EMPLOI'];
        $abandonmentRateByType = [];
        $completionRateByType = [];
        $averageStartDelayByType = [];

        foreach ($types as $type) {
            $tasksOfType = array_filter($tasks, fn($t) => $t->getType() === $type);
            $countType = count($tasksOfType);

            if ($countType === 0) {
                $abandonmentRateByType[$type] = 0;
                $completionRateByType[$type] = 0;
                $averageStartDelayByType[$type] = 0;
                continue;
            }

            $abandonedOfType = array_filter($tasksOfType, fn($t) =>
                $t->getStatut() === 'ABANDON' || 
                ($t->getDateFin() < new \DateTime() && $t->getStatut() !== 'TERMINE')
            );
            $abandonmentRateByType[$type] = count($abandonedOfType) / $countType;

            $completedOfType = array_filter($tasksOfType, fn($t) => $t->getStatut() === 'TERMINE');
            $completionRateByType[$type] = count($completedOfType) / $countType;

            $typeDelays = [];
            foreach ($tasksOfType as $task) {
                $taskSuivis = array_filter($suivis, fn($s) =>
                    $s->getTache()->getId() === $task->getId() &&
                    $s->getNouveauStatut() === 'EN_COURS'
                );
                if ($taskSuivis) {
                    $firstStart = min(array_map(fn($s) => $s->getDateAction()->getTimestamp(), $taskSuivis));
                    $delay = ($firstStart - $task->getDateDebut()->getTimestamp()) / 60;
                    $typeDelays[] = max(0, $delay);
                }
            }
            $averageStartDelayByType[$type] = $typeDelays ? array_sum($typeDelays) / count($typeDelays) : 0;
        }

        return [
            'completionRate' => $completionRate,
            'abandonmentRate' => $abandonmentRate,
            'averageStartDelayMinutes' => $averageStartDelayMinutes,
            'pauseFrequency' => $pauseFrequency,
            'mostProductiveHour' => $mostProductiveHour,
            'mostProductiveDayOfWeek' => $mostProductiveDayOfWeek,
            'abandonmentRateByType' => $abandonmentRateByType,
            'completionRateByType' => $completionRateByType,
            'averageStartDelayByType' => $averageStartDelayByType,
        ];
    }

public function callAiApi(array $metrics): array
{
    $prompt = "
    Tu es un analyste de productivité académique.

    Sur la base des métriques comportementales suivantes de l'étudiant, fournis :

    1) Un résumé concis de la productivité hebdomadaire (max 120 mots).
    2) Des conseils comportementaux clairs et actionnables (max 120 mots).

    Réponds strictement en français dans un format JSON valide comme ceci :

    {
    \"weeklyProductivitySummary\": \"...\",
    \"behavioralAdvice\": \"...\"
    }

    Métriques de l'étudiant :
    - Taux de complétion : {$metrics['completionRate']}
    - Taux d'abandon : {$metrics['abandonmentRate']}
    - Délai moyen de démarrage (minutes) : {$metrics['averageStartDelayMinutes']}
    - Fréquence de pause : {$metrics['pauseFrequency']}
    - Heure la plus productive : {$metrics['mostProductiveHour']}
    - Jour le plus productif : {$metrics['mostProductiveDayOfWeek']}

    Métriques par type :
    Abandon par type : " . json_encode($metrics['abandonmentRateByType']) . "
    Complétion par type : " . json_encode($metrics['completionRateByType']) . "
    Délai de démarrage par type : " . json_encode($metrics['averageStartDelayByType']);

    $apiKey = $_ENV['GROQ_API_KEY'] ?? null;

    if (empty($apiKey)) {
        return [
            'weeklyProductivitySummary' => 'Analyse IA indisponible : clé API non configurée.',
            'behavioralAdvice' => 'Veuillez configurer une clé API pour utiliser cette fonctionnalité.',
        ];
    }

    try {
        $ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
        
        if ($ch === false) {
            return [
                'weeklyProductivitySummary' => 'Analyse IA temporairement indisponible.',
                'behavioralAdvice' => 'Veuillez réessayer plus tard.',
            ];
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
                    ['role' => 'system', 'content' => 'Tu analyses les patterns de productivité des étudiants. Réponds toujours en français avec du JSON valide, sans texte supplémentaire.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
                'temperature' => 0.7,
                'max_tokens' => 500,
            ]),
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 0,
        ]);

        $response = curl_exec($ch);
        
        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            error_log('Erreur cURL dans callAiApi : ' . $error);
            return [
                'weeklyProductivitySummary' => 'Analyse IA temporairement indisponible.',
                'behavioralAdvice' => 'Veuillez réessayer plus tard.',
            ];
        }
        
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            error_log('Erreur HTTP Groq API ' . $httpCode . ' : ' . substr($response, 0, 500));
            return [
                'weeklyProductivitySummary' => 'Analyse IA temporairement indisponible.',
                'behavioralAdvice' => 'Veuillez réessayer plus tard.',
            ];
        }

        $data = json_decode($response, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log('Erreur de parsing JSON : ' . json_last_error_msg());
            return [
                'weeklyProductivitySummary' => 'Analyse IA temporairement indisponible.',
                'behavioralAdvice' => 'Veuillez réessayer plus tard.',
            ];
        }

        $messageContent = $data['choices'][0]['message']['content'] ?? '';
        
        // Log the raw response for debugging
        error_log('Raw AI response: ' . $messageContent);

        // Clean up markdown if present
        $messageContent = trim($messageContent);
        
        // Remove any "Voici l'analyse..." prefix if present
        if (preg_match('/\{.*\}/s', $messageContent, $matches)) {
            // Extract just the JSON part
            $messageContent = $matches[0];
        }
        
        // Remove markdown code blocks
        if (strpos($messageContent, '```json') === 0) {
            $messageContent = preg_replace('/^```json\s*/', '', $messageContent);
            $messageContent = preg_replace('/\s*```$/', '', $messageContent);
        } elseif (strpos($messageContent, '```') === 0) {
            $messageContent = preg_replace('/^```\s*/', '', $messageContent);
            $messageContent = preg_replace('/\s*```$/', '', $messageContent);
        }

        // Try to parse the JSON
        $parsed = json_decode($messageContent, true);

        if (json_last_error() === JSON_ERROR_NONE && is_array($parsed)) {
            // Successfully parsed JSON
            return [
                'weeklyProductivitySummary' => $parsed['weeklyProductivitySummary'] ?? 'Analyse disponible.',
                'behavioralAdvice' => $parsed['behavioralAdvice'] ?? 'Continuez vos efforts !',
            ];
        }

        // If parsing failed, try to extract from the text
        if (preg_match('/weeklyProductivitySummary["\s:]+([^"]+)/', $messageContent, $matches)) {
            $summary = trim($matches[1]);
        } else {
            $summary = 'Analyse de productivité disponible.';
        }

        if (preg_match('/behavioralAdvice["\s:]+([^"]+)/', $messageContent, $matches)) {
            $advice = trim($matches[1]);
        } else {
            $advice = 'Continuez vos efforts pour améliorer votre productivité.';
        }

        return [
            'weeklyProductivitySummary' => $summary,
            'behavioralAdvice' => $advice,
        ];

    } catch (\Exception $e) {
        error_log('Exception dans callAiApi : ' . $e->getMessage());
        return [
            'weeklyProductivitySummary' => 'Analyse IA temporairement indisponible.',
            'behavioralAdvice' => 'Veuillez réessayer plus tard.',
        ];
    }
}

    private function saveProfile(User $user, array $metrics, array $aiInsights): StudentIntelligenceProfile
    {
        $profile = new StudentIntelligenceProfile();

        $profile->setUser($user);
        $profile->setCompletionRate($metrics['completionRate']);
        $profile->setAbandonmentRate($metrics['abandonmentRate']);
        $profile->setAverageStartDelayMinutes($metrics['averageStartDelayMinutes']);
        $profile->setPauseFrequency($metrics['pauseFrequency']);
        $profile->setMostProductiveHour($metrics['mostProductiveHour']);
        $profile->setMostProductiveDayOfWeek($metrics['mostProductiveDayOfWeek']);
        
        // Type metrics
        $profile->setAbandonmentRateByType($metrics['abandonmentRateByType']);
        $profile->setCompletionRateByType($metrics['completionRateByType']);
        $profile->setAverageStartDelayByType($metrics['averageStartDelayByType']);

        // AI insights - these match what your Twig expects!
        $profile->setWeeklyProductivitySummary($aiInsights['weeklyProductivitySummary'] ?? null);
        $profile->setBehavioralAdvice($aiInsights['behavioralAdvice'] ?? null);

        $profile->setAnalyzedAt(new \DateTime());

        $this->em->persist($profile);
        $this->em->flush();

        return $profile;
    }
}