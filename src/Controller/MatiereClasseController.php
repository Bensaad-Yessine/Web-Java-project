<?php

namespace App\Controller;

use App\Entity\MatiereClasse;
use App\Form\MatiereClasseType;
use App\Repository\MatiereClasseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/matiereclasse')]
final class MatiereClasseController extends AbstractController
{
    #[Route(name: 'app_matiere_classe_index', methods: ['GET'])]
    public function index(Request $request, MatiereClasseRepository $matiereClasseRepository): Response
    {
        // 🔍 Recherche
        $search = $request->query->get('search');

        // 🔃 Tri
        $sortParam = $request->query->get('sort'); // ex: coefficient_asc
        $sortField = null;
        $sortOrder = null;
        if ($sortParam) {
            [$sortField, $sortOrder] = explode('_', $sortParam);
        }

        // 📦 Récupération des matières de classe
        $matiereClasses = $matiereClasseRepository->searchAndSort($search, $sortField, $sortOrder);

        return $this->render('matiere_classe/index.html.twig', [
            'matiere_classes' => $matiereClasses,
            'search' => $search,
            'sort' => $sortParam
        ]);
    }

    #[Route('/front/{id}', name: 'app_matiere_classe_front_index', methods: ['GET'], defaults: ['id' => null])]
    public function frontIndex(MatiereClasseRepository $matiereClasseRepository, \App\Repository\TacheRepository $tacheRepository, ?\App\Entity\Classe $classe = null): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $matieres = [];
        
        if ($classe) {
            // If ID passed, show subjects for that class
            $matieres = $matiereClasseRepository->findBy(['classe' => $classe]);
        } else {
            // Default to user's class if no ID passed
             $classe = $user->getClasse();
             if ($classe) {
                 $matieres = $matiereClasseRepository->findBy(['classe' => $classe]);
             } else {
                 $matieres = []; // or findAll() if you prefer a fallback, but user requested filtering.
             }
        }
        
        $tasks = $tacheRepository->findTaskByUser($user);

        return $this->render('user/matiere_classe/front_index.html.twig', [
            'userClasse' => $classe ?? $user->getClasse(), // Pass user's class for context if needed, or null
            'matieres' => $matieres,
            'tasks' => $tasks,
        ]);
    }



    #[Route('/new', name: 'app_matiere_classe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $matiereClasse = new MatiereClasse();
        $form = $this->createForm(MatiereClasseType::class, $matiereClasse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($matiereClasse);
            $entityManager->flush();

            return $this->redirectToRoute('app_matiere_classe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matiere_classe/new.html.twig', [
            'matiere_classe' => $matiereClasse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matiere_classe_show', methods: ['GET'])]
    public function show(MatiereClasse $matiereClasse): Response
    {
        return $this->render('matiere_classe/show.html.twig', [
            'matiere_classe' => $matiereClasse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_matiere_classe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MatiereClasse $matiereClasse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MatiereClasseType::class, $matiereClasse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_matiere_classe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matiere_classe/edit.html.twig', [
            'matiere_classe' => $matiereClasse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matiere_classe_delete', methods: ['POST'])]
    public function delete(Request $request, MatiereClasse $matiereClasse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matiereClasse->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($matiereClasse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_matiere_classe_index', [], Response::HTTP_SEE_OTHER);
    }
}