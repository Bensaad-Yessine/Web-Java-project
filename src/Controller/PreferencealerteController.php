<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PreferencealerteController extends AbstractController
{
    #[Route('/preferencealerte', name: 'app_preferencealerte')]
    public function index(): Response
    {
        return $this->render('preferencealerte/index.html.twig', [
            'controller_name' => 'PreferencealerteController',
        ]);
    }
}
