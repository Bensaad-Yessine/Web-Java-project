<?php

namespace App\Controller;

use App\Repository\SeanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontSeanceController extends AbstractController
{
    #[Route('/front/seances', name: 'front_seances')]
    public function index(SeanceRepository $seanceRepo): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $seances = $seanceRepo->findBy([], ['debut' => 'ASC']);

        return $this->render('front/seances.html.twig', [
            'seances' => $seances,
            'current_page' => 'seances',
        ]);
    }
}
