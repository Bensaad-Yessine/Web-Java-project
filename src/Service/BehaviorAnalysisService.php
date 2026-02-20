<?php

namespace App\Service;

use App\Entity\StudentIntelligenceProfile;
use App\Entity\User;
use App\Repository\StudentIntelligenceProfileRepository;
use App\Repository\SuiviTacheRepository;
use App\Repository\TacheRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class BehaviorAnalysisService
{
    private EntityManagerInterface $em;
    private TacheRepository $tacheRepository;
    private SuiviTacheRepository $suiviRepository;
    private StudentIntelligenceProfileRepository $profileRepository;
    private UserRepository $userRepository;
    private HttpClientInterface $httpClient;

    public function __construct(
        EntityManagerInterface $em,
        TacheRepository $tacheRepository,
        SuiviTacheRepository $suiviRepository,
        StudentIntelligenceProfileRepository $profileRepository,
        UserRepository $userRepository,
        HttpClientInterface $httpClient
    ) {
        $this->em = $em;
        $this->tacheRepository = $tacheRepository;
        $this->suiviRepository = $suiviRepository;
        $this->profileRepository = $profileRepository;
        $this->userRepository = $userRepository;
        $this->httpClient = $httpClient;
    }

    public function getInsightsForUser(User $user): array
    {
        $lastProfile = $this->profileRepository->findLastByUser($user);
        $now = new \DateTime();

        // Case 1: No previous profile → compute everything
        if (!$lastProfile) {
            return $this->computeAndSaveProfile($user);
        }

        // Case 2: Last profile older than 1 week → compute incremental update
        $diff = $now->diff($lastProfile->getAnalyzedAt());
        if ($diff->days >= 7) {
            return $this->computeAndSaveProfile($user, $lastProfile->getAnalyzedAt());
        }

        // Case 3: Last profile is recent → return last profile as-is
        return [
            'metrics' => [
                'completionRate' => $lastProfile->getCompletionRate(),
                'abandonmentRate' => $lastProfile->getAbandonmentRate(),
                'averageStartDelayMinutes' => $lastProfile->getAverageStartDelayMinutes(),
                'pauseFrequency' => $lastProfile->getPauseFrequency(),
                'mostProductiveHour' => $lastProfile->getMostProductiveHour(),
                'mostProductiveDayOfWeek' => $lastProfile->getMostProductiveDayOfWeek(),
            ],
            'aiInsights' => [
                'weeklyProductivitySummary' => $lastProfile->getWeeklyProductivitySummary(),
                'behavioralAdvice' => $lastProfile->getBehavioralAdvice(),
            ],
            'lastUpdated' => $lastProfile->getAnalyzedAt()->format('Y-m-d H:i:s'),
        ];
    }

    /**
     * Alias for getInsightsForUser - used by controller
     */
    public function getOrComputeProfile(User $user): StudentIntelligenceProfile
    {
        try {
            $lastProfile = $this->profileRepository->findLastByUser($user);
            $now = new \DateTime();

            if (!$lastProfile || $now->diff($lastProfile->getAnalyzedAt())->days >= 7) {
                $tasks = $this->tacheRepository->findByUserSince($user, $lastProfile?->getAnalyzedAt());
                $suivis = $this->suiviRepository->findByUserSince($user, $lastProfile?->getAnalyzedAt());

                if (!is_array($tasks)) {
                    throw new \Exception('findByUserSince did not return array for tasks');
                }
                if (!is_array($suivis)) {
                    throw new \Exception('findByUserSince did not return array for suivis');
                }

                $metrics = $this->computeBehaviorMetrics($tasks, $suivis);

                if (!is_array($metrics)) {
                    throw new \Exception('computeBehaviorMetrics did not return array');
                }

                $aiInsights = $this->callAiApi($metrics);

                if (!is_array($aiInsights)) {
                    throw new \Exception('callAiApi did not return array');
                }

                return $this->saveProfile($user, $metrics, $aiInsights);
            }

            return $lastProfile;

        } catch (\Throwable $e) {
            error_log('ERROR in getOrComputeProfile: ' . $e->getMessage());
            error_log('File: ' . $e->getFile() . ':' . $e->getLine());
            throw $e;
        }
    }

    private function computeAndSaveProfile(User $user, ?\DateTime $since = null): array
    {
        $tasks = $this->tacheRepository->findByUserSince($user, $since);
        $suivis = $this->suiviRepository->findByUserSince($user, $since);

        $metrics = $this->computeBehaviorMetrics($tasks, $suivis);
        $aiInsights = $this->callAiApi($metrics);

        $this->saveProfile($user, $metrics, $aiInsights);

        return [
            'metrics' => $metrics,
            'aiInsights' => $aiInsights,
            'lastUpdated' => (new \DateTime())->format('Y-m-d H:i:s'),
        ];
    }

    private function computeBehaviorMetrics(array $tasks, array $suivis): array
    {
        $totalTasks = count($tasks);
        if ($totalTasks === 0) {
            return [
                'abandonmentRate' => 0,
                'completionRate' => 0,
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
            $t->getStatut() === 'ABANDONNEE' || 
            ($t->getDateFin() < new \DateTime() && $t->getStatut() !== 'TERMINEE')
        );
        $abandonmentRate = count($abandonedTasks) / $totalTasks;

        // Completion rate
        $completedTasks = array_filter($tasks, fn($t) => $t->getStatut() === 'TERMINEE');
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
            if (in_array($s->getNouveauStatut(), ['EN_COURS', 'TERMINEE'])) {
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
                $t->getStatut() === 'ABANDONNEE' || 
                ($t->getDateFin() < new \DateTime() && $t->getStatut() !== 'TERMINEE')
            );
            $abandonmentRateByType[$type] = count($abandonedOfType) / $countType;

            $completedOfType = array_filter($tasksOfType, fn($t) => $t->getStatut() === 'TERMINEE');
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
            'abandonmentRate' => $abandonmentRate,
            'completionRate' => $completionRate,
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
        You are an academic productivity analyst.

        Based on the following student behavior metrics, provide:

        1) A concise weekly productivity summary (max 120 words).
        2) Clear and actionable behavioral advice (max 120 words).

        Return your response strictly in valid JSON format like this:

        {
        \"weeklyProductivitySummary\": \"...\",
        \"behavioralAdvice\": \"...\"
        }

        Student Metrics:
        - Completion Rate: {$metrics['completionRate']}
        - Abandonment Rate: {$metrics['abandonmentRate']}
        - Average Start Delay (minutes): {$metrics['averageStartDelayMinutes']}
        - Pause Frequency: {$metrics['pauseFrequency']}
        - Most Productive Hour: {$metrics['mostProductiveHour']}
        - Most Productive Day: {$metrics['mostProductiveDayOfWeek']}

        Per-Type Metrics:
        Abandonment by type: " . json_encode($metrics['abandonmentRateByType']) . "
        Completion by type: " . json_encode($metrics['completionRateByType']) . "
        Start delay by type: " . json_encode($metrics['averageStartDelayByType']);

        $apiKey = $_ENV['GROQ_API_KEY'] ?? null;

        if (empty($apiKey)) {
            return [
                'weeklyProductivitySummary' => 'AI analysis unavailable: API key not configured.',
                'behavioralAdvice' => null,
            ];
        }

        try {
            $ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
            
            if ($ch === false) {
                return [
                    'weeklyProductivitySummary' => 'AI analysis unavailable at the moment.',
                    'behavioralAdvice' => null,
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
                        ['role' => 'system', 'content' => 'You analyze student productivity patterns.'],
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
                error_log('cURL Error in callAiApi: ' . $error);
                return [
                    'weeklyProductivitySummary' => 'AI analysis unavailable at the moment.',
                    'behavioralAdvice' => null,
                ];
            }
            
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode !== 200) {
                error_log('Groq API HTTP Error ' . $httpCode . ': ' . substr($response, 0, 500));
                return [
                    'weeklyProductivitySummary' => 'AI analysis unavailable at the moment.',
                    'behavioralAdvice' => null,
                ];
            }

            $data = json_decode($response, true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                error_log('JSON parse error in API response: ' . json_last_error_msg());
                return [
                    'weeklyProductivitySummary' => 'AI analysis unavailable at the moment.',
                    'behavioralAdvice' => null,
                ];
            }

            $messageContent = $data['choices'][0]['message']['content'] ?? '';

            // Remove markdown code blocks if present
            $messageContent = trim($messageContent);
            if (strpos($messageContent, '```json') === 0) {
                $messageContent = preg_replace('/^```json\s*/', '', $messageContent);
                $messageContent = preg_replace('/\s*```$/', '', $messageContent);
            } elseif (strpos($messageContent, '```') === 0) {
                $messageContent = preg_replace('/^```\s*/', '', $messageContent);
                $messageContent = preg_replace('/\s*```$/', '', $messageContent);
            }

            $parsed = json_decode($messageContent, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                return [
                    'weeklyProductivitySummary' => $parsed['weeklyProductivitySummary'] ?? $parsed['summary'] ?? $messageContent,
                    'behavioralAdvice' => $parsed['behavioralAdvice'] ?? $parsed['advice'] ?? null,
                ];
            }

            return [
                'weeklyProductivitySummary' => $messageContent,
                'behavioralAdvice' => null,
            ];

        } catch (\Exception $e) {
            error_log('Exception in callAiApi: ' . $e->getMessage());
            return [
                'weeklyProductivitySummary' => 'AI analysis unavailable at the moment.',
                'behavioralAdvice' => null,
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
        $profile->setWeeklyProductivitySummary($aiInsights['weeklyProductivitySummary'] ?? null);
        $profile->setBehavioralAdvice($aiInsights['behavioralAdvice'] ?? null);
        $profile->setAnalyzedAt(new \DateTime());

        $this->em->persist($profile);
        $this->em->flush();

        return $profile; // <-- ADD THIS
    }
}