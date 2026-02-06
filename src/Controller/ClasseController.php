<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Form\ClasseType;
use App\Repository\ClasseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/classe')]
class ClasseController extends AbstractController
{
    // =========================
    // LISTE + RECHERCHE + TRI
    // =========================
    #[Route('/', name: 'app_classe_index', methods: ['GET'])]
    public function index(Request $request, ClasseRepository $classeRepository): Response
    {
        // 🔍 Recherche
        $search = $request->query->get('nom');

        // 🔃 Tri
        $sortParam = $request->query->get('sort'); // ex: nom_asc
        $sortField = null;
        $sortOrder = null;
        if ($sortParam) {
            [$sortField, $sortOrder] = explode('_', $sortParam);
        }

        // 📦 Récupération des classes
        $classes = $classeRepository->searchAndSort($search, $sortField, $sortOrder);

        return $this->render('classe/index.html.twig', [
            'classes' => $classes,
            'nom'     => $search,
            'sort'    => $sortParam
        ]);
    }

    // =========================
    // AJOUTER
    // =========================
    #[Route('/new', name: 'app_classe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $classe = new Classe();
        $form = $this->createForm(ClasseType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($classe);
            $entityManager->flush();

            return $this->redirectToRoute('app_classe_index');
        }

        return $this->render('classe/new.html.twig', [
            'classe' => $classe,
            'form' => $form->createView()
        ]);
    }

    // =========================
    // AFFICHER
    // =========================
    #[Route('/{id}', name: 'app_classe_show', methods: ['GET'])]
    public function show(Classe $classe): Response
    {
        return $this->render('classe/show.html.twig', [
            'classe' => $classe
        ]);
    }

    // =========================
    // MODIFIER
    // =========================
    #[Route('/{id}/edit', name: 'app_classe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Classe $classe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClasseType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_classe_index');
        }

        return $this->render('classe/edit.html.twig', [
            'classe' => $classe,
            'form' => $form->createView()
        ]);
    }

    // =========================
    // SUPPRIMER
    // =========================
    #[Route('/{id}', name: 'app_classe_delete', methods: ['POST'])]
    public function delete(Request $request, Classe $classe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$classe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($classe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_classe_index');
    }
}
