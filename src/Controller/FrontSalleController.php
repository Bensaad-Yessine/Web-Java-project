<?php

namespace App\Controller;

use App\Repository\SalleRepository;
use App\Entity\Salle;
use App\Entity\Classe;
use App\Entity\Seance;
use App\Service\RoomAvailabilityService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

class FrontSalleController extends AbstractController
{
    private RoomAvailabilityService $availability;
    private EntityManagerInterface $em;
    private Security $security;

    public function __construct(RoomAvailabilityService $availability, EntityManagerInterface $em, Security $security)
    {
        $this->availability = $availability;
        $this->em           = $em;
        $this->security     = $security;
    }

    #[Route('/front/salles', name: 'front_salles')]
    public function index(Request $request, SalleRepository $salleRepo): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $salles = $salleRepo->findAll();


        // build distinct lists
        $blocks = [];
        $etages = [];
        foreach ($salles as $s) {
            $blocks[] = $s->getBlock();
            $etages[] = $s->getEtage();
        }
        $blocks = array_unique($blocks);
        $etages = array_unique($etages);

        return $this->render('front/salles/index.html.twig', [
            'salles' => $salles,
            'selectedBloc' => $request->query->get('bloc', ''),
            'selectedEtage' => $request->query->get('etage', ''),
            'search' => $request->query->get('q', ''),
            'blockCount' => count($blocks),
            'etageCount' => count($etages),
            // pass raw lists as well for filtering dropdowns
            'blocs' => $blocks,
            'etages' => $etages,
        ]);
    }

}
