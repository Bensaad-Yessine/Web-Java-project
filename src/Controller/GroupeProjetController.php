<?php

namespace App\Controller;

use App\Entity\GroupeProjet;
use App\Form\GroupeProjetType;
use App\Repository\GroupeProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/groupe/projet')]
final class GroupeProjetController extends AbstractController
{
    #[Route(name: 'app_groupe_projet_index', methods: ['GET'])]
    public function index(GroupeProjetRepository $groupeProjetRepository): Response
    {
        return $this->render('groupe_projet/index.html.twig', [
            'groupe_projets' => $groupeProjetRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_groupe_projet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $groupeProjet = new GroupeProjet();
        $form = $this->createForm(GroupeProjetType::class, $groupeProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($groupeProjet);
            $entityManager->flush();

            return $this->redirectToRoute('app_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('groupe_projet/new.html.twig', [
            'groupe_projet' => $groupeProjet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_projet_show', methods: ['GET'])]
    public function show(GroupeProjet $groupeProjet): Response
    {
        return $this->render('groupe_projet/show.html.twig', [
            'groupe_projet' => $groupeProjet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_groupe_projet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GroupeProjet $groupeProjet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GroupeProjetType::class, $groupeProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('groupe_projet/edit.html.twig', [
            'groupe_projet' => $groupeProjet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_projet_delete', methods: ['POST'])]
    public function delete(Request $request, GroupeProjet $groupeProjet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$groupeProjet->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($groupeProjet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
    }
}
