<?php

namespace App\Controller;

use App\Entity\Seance;
use App\Entity\Classe;
use App\Form\SeanceType;
use App\Repository\SeanceRepository;
use App\Repository\ClasseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/seance')]
final class SeanceController extends AbstractController
{
    // =========================
    // INDEX
    // =========================
    #[Route('/', name: 'app_seance_index', methods: ['GET'])]
    public function index(SeanceRepository $seanceRepository): Response
    {
        return $this->render('seance/index.html.twig', [
            'seances' => $seanceRepository->findAll(),
        ]);
    }

    // =========================
    // SHOW SEANCES BY CLASSE
    // IMPORTANT: placed BEFORE /{id}
    // =========================
    #[Route('/by-classe/{id<\d+>}', name: 'app_seance_by_classe', methods: ['GET'])]
    public function showSeanceByClasse(
        SeanceRepository $seanceRepository,
        Classe $classe
    ): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $seances = $seanceRepository->findBy(
            ['classe' => $classe],
            ['jour' => 'ASC', 'heureDebut' => 'ASC']
        );

        return $this->render('seance/schedule.html.twig', [
            'seances' => $seances,
            'classe' => $classe,
        ]);
    }

    // =========================
    // NEW
    // =========================
    #[Route('/new', name: 'app_seance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $seance = new Seance();
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($seance);
            $entityManager->flush();

            $this->addFlash('success', 'Séance créée avec succès.');

            return $this->redirectToRoute('app_seance_index');
        }

        return $this->render('seance/new.html.twig', [
            'seance' => $seance,
            'form' => $form->createView(),
        ]);
    }

    // =========================
    // SHOW ONE SEANCE
    // =========================
    #[Route('/{id<\d+>}', name: 'app_seance_show', methods: ['GET'])]
    public function show(Seance $seance): Response
    {
        return $this->render('seance/show.html.twig', [
            'seance' => $seance,
        ]);
    }

    // =========================
    // EDIT
    // =========================
    #[Route('/{id<\d+>}/edit', name: 'app_seance_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Seance $seance,
        EntityManagerInterface $entityManager
    ): Response
    {
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            $this->addFlash('success', 'Séance modifiée avec succès.');

            return $this->redirectToRoute('app_seance_index');
        }

        return $this->render('seance/edit.html.twig', [
            'seance' => $seance,
            'form' => $form->createView(),
        ]);
    }

    // =========================
    // DELETE
    // =========================
    #[Route('/{id<\d+>}', name: 'app_seance_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Seance $seance,
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid(
            'delete'.$seance->getId(),
            $request->request->get('_token')
        )) {
            $entityManager->remove($seance);
            $entityManager->flush();

            $this->addFlash('success', 'Séance supprimée.');
        }

        return $this->redirectToRoute('app_seance_index');
    }
}
