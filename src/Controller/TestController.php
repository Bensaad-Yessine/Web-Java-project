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
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException();
        }
        $alertService->runForUser($user->getId());
        return new Response('Alert service executed!');
    }
}