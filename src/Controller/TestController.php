<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\BehaviorAnalysisService;

class TestController extends AbstractController
{
    #[Route('/test-ai', name: 'test_ai')]
    public function testAi(BehaviorAnalysisService $service): JsonResponse
    {
        // Example metrics you want to send
        $metrics = [
            'completionRate' => 0.8,
            'abandonmentRate' => 0.1,
            'averageStartDelayMinutes' => 12,
            'pauseFrequency' => 3,
            'mostProductiveHour' => 14,
            'mostProductiveDayOfWeek' => 'Tuesday',
            'abandonmentRateByType' => ['REVISION' => 0.2, 'MANUEL' => 0.05],
            'completionRateByType' => ['REVISION' => 0.8, 'MANUEL' => 0.95],
            'averageStartDelayByType' => ['REVISION' => 10, 'MANUEL' => 15],
        ];

        $result = $service->callAiApi($metrics);

        return new JsonResponse([
            'aiInsights' => $result
        ]);
    }
}