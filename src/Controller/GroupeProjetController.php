<?php

namespace App\Controller;

use App\Entity\GroupeProjet;
use App\Form\GroupeProjetType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

#[Route('/groupe-projet')]
class GroupeProjetController extends AbstractController
{
    #[Route(name: 'app_groupe_projet_index', methods: ['GET'])]
    public function index(Request $request, GroupeProjetRepository $groupeProjetRepository): Response
    {
        $search = $request->query->get('search');
        $matiere = $request->query->get('matiere');
        $statut = $request->query->get('statut');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $groupeProjets = $groupeProjetRepository->findWithFilters(
            $search, $matiere, $statut, $sort, $direction
        );

        return $this->render('groupe_projet/index.html.twig', [
            'groupe_projets' => $groupeProjets,
            'search' => $search,
            'matiere' => $matiere,
            'statut' => $statut,
            'sort' => $sort,
            'direction' => $direction
        ]);
    }

    #[Route('/ajax/filter', name: 'app_groupe_projet_ajax_filter', methods: ['GET'])]
    public function ajaxFilter(Request $request, GroupeProjetRepository $groupeProjetRepository, CsrfTokenManagerInterface $csrfTokenManager): JsonResponse
    {
        $search = $request->query->get('search');
        $matiere = $request->query->get('matiere');
        $statut = $request->query->get('statut');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $groupeProjets = $groupeProjetRepository->findWithFilters(
            $search, $matiere, $statut, $sort, $direction
        );

        $data = [];
        foreach ($groupeProjets as $groupe) {
            $data[] = [
                'id' => $groupe->getId(),
                'nomProjet' => $groupe->getNomProjet(),
                'matiere' => $groupe->getMatiere(),
                'nbrMembre' => $groupe->getNbrMembre(),
                'description' => $groupe->getDescription(),
                'statut' => $groupe->getStatut(),
                'createdAt' => $groupe->getCreatedAt() ? $groupe->getCreatedAt()->format('d/m/Y H:i') : '—',
                'url' => $this->generateUrl('app_groupe_projet_show', ['id' => $groupe->getId()]),
                'editUrl' => $this->generateUrl('app_groupe_projet_edit', ['id' => $groupe->getId()]),
                'csrfToken' => $csrfTokenManager->getToken('delete' . $groupe->getId())->getValue(),
            ];
        }

        return new JsonResponse(['success' => true, 'data' => $data]);
    }

    #[Route('/new', name: 'app_groupe_projet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $groupeProjet = new GroupeProjet();

        $form = $this->createForm(GroupeProjetType::class, $groupeProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($groupeProjet);
            $em->flush();

            $this->addFlash('success', 'GroupeProjet créé avec succès !');

            return $this->redirectToRoute('groupe_projet_list');
        }

        return $this->render('groupe_projet/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/', name: 'groupe_projet_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $groupes = $em->getRepository(GroupeProjet::class)->findAll();

        return $this->render('groupe_projet/list.html.twig', [
            'groupes' => $groupes,
        ]);
    }
}
