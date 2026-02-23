<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SuiviTacheController extends AbstractController
{
    #[Route('/suivi/tache', name: 'app_suivi_tache')]
    public function index(): Response
    {
        return $this->render('suivi_tache/index.html.twig', [
            'controller_name' => 'SuiviTacheController',
        ]);
    }
    
}
