<?php

namespace App\Controller;

use App\Repository\SalleRepository;
use App\Repository\SeanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontDashboardController extends AbstractController
{
    #[Route('/front/dashboard', name: 'front_dashboard')]
    public function index(SalleRepository $salleRepo, SeanceRepository $seanceRepo): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $totalSalles = $salleRepo->count([]);
        $totalSeances = $seanceRepo->count([]);
        $salles = $salleRepo->findBy([], ['name' => 'ASC'], 5);

        // find next upcoming seance (after now)
        $qb = $seanceRepo->createQueryBuilder('s')
            ->andWhere('s.debut >= :now')
            ->setParameter('now', new \DateTime())
            ->orderBy('s.debut', 'ASC')
            ->setMaxResults(1);
        $nextSeance = $qb->getQuery()->getOneOrNullResult();

        return $this->render('front/dashboard.html.twig', [
            'current_page' => 'dashboard',
            'totalSalles' => $totalSalles,
            'totalSeances' => $totalSeances,
            'recentSalles' => $salles,
            'nextSeance' => $nextSeance,
        ]);
    }
}
