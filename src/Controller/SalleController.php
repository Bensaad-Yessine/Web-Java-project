<?php

namespace App\Controller;

use App\Entity\Salle;
use App\Form\SalleType;
use App\Repository\SalleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/salle')]
final class SalleController extends AbstractController
{
    #[Route(name: 'app_salle_index', methods: ['GET'])]
    public function index(Request $request, SalleRepository $salleRepository): Response
    {
        $search = $request->query->get('search', '');
        $block = $request->query->get('block', '');
        $minCapacite = $request->query->get('minCapacite', '');
        $maxCapacite = $request->query->get('maxCapacite', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $salles = $salleRepository->findWithFilters(
            $search ?: null,
            $block ?: null,
            $minCapacite ? (int)$minCapacite : null,
            $maxCapacite ? (int)$maxCapacite : null,
            $sort,
            $direction
        );

        $blocks = $salleRepository->getDistinctBlocks();

        return $this->render('salle/index.html.twig', [
            'salles' => $salles,
            'blocks' => $blocks,
            'search' => $search,
            'blockFilter' => $block, // Rename to avoid conflict if any
            'minCapacite' => $minCapacite,
            'maxCapacite' => $maxCapacite,
            'sort' => $sort,
            'direction' => $direction,
        ]);
    }

    #[Route('/ajax/filter', name: 'app_salle_ajax_filter', methods: ['GET'])]
    public function ajaxFilter(
        Request $request,
        SalleRepository $salleRepository,
        \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $search = $request->query->get('search', '');
        $block = $request->query->get('block', '');
        $minCapacite = $request->query->get('minCapacite', '');
        $maxCapacite = $request->query->get('maxCapacite', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $salles = $salleRepository->findWithFilters(
            $search ?: null,
            $block ?: null,
            $minCapacite ? (int)$minCapacite : null,
            $maxCapacite ? (int)$maxCapacite : null,
            $sort,
            $direction
        );

        $data = [];
        foreach ($salles as $salle) {
            $data[] = [
                'id' => $salle->getId(),
                'name' => $salle->getName(),
                'block' => $salle->getBlock(),
                'number' => $salle->getNumber(),
                'capacite' => $salle->getCapacite(),
                'etage' => $salle->getEtage(),
                'disponibilite' => $salle->isDisponibilite(),
                'url' => $this->generateUrl('app_salle_show', ['id' => $salle->getId()]),
                'editUrl' => $this->generateUrl('app_salle_edit', ['id' => $salle->getId()]),
                'csrfToken' => $csrfTokenManager->getToken('delete' . $salle->getId())->getValue(),
            ];
        }

        return new JsonResponse([
            'success' => true,
            'count' => count($salles),
            'data' => $data,
        ]);
    }

    #[Route('/new', name: 'app_salle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $salle = new Salle();
        $form = $this->createForm(SalleType::class, $salle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($salle);
            $entityManager->flush();

            return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('salle/new.html.twig', [
            'salle' => $salle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salle_show', methods: ['GET'])]
    public function show(Salle $salle): Response
    {
        return $this->render('salle/show.html.twig', [
            'salle' => $salle,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_salle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Salle $salle, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SalleType::class, $salle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('salle/edit.html.twig', [
            'salle' => $salle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salle_delete', methods: ['POST'])]
    public function delete(Request $request, Salle $salle, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$salle->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($salle);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
    }
}
