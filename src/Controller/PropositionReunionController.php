<?php

namespace App\Controller;

use App\Entity\PropositionReunion;
use App\Form\PropositionReunionType;
use App\Repository\PropositionReunionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/proposition/reunion')]
class PropositionReunionController extends AbstractController
{
    #[Route('/', name: 'app_proposition_reunion_index', methods: ['GET'])]
    public function index(Request $request, PropositionReunionRepository $propositionReunionRepository, EntityManagerInterface $entityManager): Response
    {
        $groupeId = $request->query->get('groupeId');
        $groupeProjet = null;
        
        if ($groupeId) {
            $groupeProjet = $entityManager->getRepository(\App\Entity\GroupeProjet::class)->find($groupeId);
            $propositionReunions = $propositionReunionRepository->findBy(['idGroupe' => $groupeProjet]);
        } else {
            $propositionReunions = $propositionReunionRepository->findAll();
            // If no groupeId provided, try to get it from the first proposition
            if (!empty($propositionReunions)) {
                $groupeProjet = $propositionReunions[0]->getIdGroupe();
            }
        }
        
        return $this->render('proposition_reunion/index.html.twig', [
            'proposition_reunions' => $propositionReunions,
            'groupe_projet' => $groupeProjet,
        ]);
    }

    #[Route('/new', name: 'app_proposition_reunion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $propositionReunion = new PropositionReunion();
        $form = $this->createForm(PropositionReunionType::class, $propositionReunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($propositionReunion);
            $entityManager->flush();

            $this->addFlash('success', 'Proposition de réunion créée avec succès!');
            return $this->redirectToRoute('app_proposition_reunion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('proposition_reunion/new.html.twig', [
            'proposition_reunion' => $propositionReunion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proposition_reunion_show', methods: ['GET'])]
    public function show(PropositionReunion $propositionReunion): Response
    {
        return $this->render('proposition_reunion/show.html.twig', [
            'proposition_reunion' => $propositionReunion,
            'groupe_projet' => $propositionReunion->getIdGroupe(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proposition_reunion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PropositionReunion $propositionReunion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PropositionReunionType::class, $propositionReunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Proposition de réunion modifiée avec succès!');
            return $this->redirectToRoute('app_proposition_reunion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('proposition_reunion/edit.html.twig', [
            'proposition_reunion' => $propositionReunion,
            'groupe_projet' => $propositionReunion->getIdGroupe(),
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proposition_reunion_delete', methods: ['POST'])]
    public function delete(Request $request, PropositionReunion $propositionReunion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$propositionReunion->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($propositionReunion);
            $entityManager->flush();

            $this->addFlash('success', 'Proposition de réunion supprimée avec succès!');
        }

        return $this->redirectToRoute('app_proposition_reunion_index', [], Response::HTTP_SEE_OTHER);
    }
}