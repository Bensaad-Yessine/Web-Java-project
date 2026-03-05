<?php
namespace App\Controller;

use App\Service\AlertEngineService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test-alert', name: 'test_alert')]
    public function index(AlertEngineService $alertService): Response
    {
        $alertService->run();
        return new Response('Alert service executed!');
    }
}