<?php

namespace App\Controller;

use App\Entity\PropositionReunion;
use App\Entity\GroupeProjet;
use App\Form\PropositionReunionType;
use App\Repository\PropositionReunionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/groupe/{groupeId}/proposition')]
class PropositionReunionController extends AbstractController
{
    #[Route('/', name: 'app_proposition_reunion_index', methods: ['GET'])]
    public function index(int $groupeId, PropositionReunionRepository $propositionReunionRepository, EntityManagerInterface $entityManager): Response
    {
        $groupeProjet = $entityManager->getRepository(GroupeProjet::class)->find($groupeId);
        
        if (!$groupeProjet) {
            throw $this->createNotFoundException('Groupe non trouvé');
        }
        
        $propositions = $propositionReunionRepository->findBy(['idGroupe' => $groupeId], ['dateCreation' => 'DESC']);
        
        return $this->render('proposition_reunion/index.html.twig', [
            'proposition_reunions' => $propositions,
            'groupe_projet' => $groupeProjet,
        ]);
    }

    #[Route('/new', name: 'app_proposition_reunion_new', methods: ['GET', 'POST'])]
public function new(Request $request, int $groupeId, EntityManagerInterface $entityManager): Response
{
    $groupeProjet = $entityManager->getRepository(GroupeProjet::class)->find($groupeId);
    
    if (!$groupeProjet) {
        throw $this->createNotFoundException('Groupe non trouvé');
    }
    
    $propositionReunion = new PropositionReunion();
    $propositionReunion->setIdGroupe($groupeProjet);
    $propositionReunion->setDateCreation(new \DateTime());
    $propositionReunion->setStatus('En attente');
    $propositionReunion->setNbrVoteAccept(0);
    
    // Generate proposition ID
    $lastProposition = $entityManager->getRepository(PropositionReunion::class)
        ->createQueryBuilder('p')
        ->orderBy('p.propositionId', 'DESC')
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();
    
    $nextId = $lastProposition ? $lastProposition->getPropositionId() + 1 : 1;
    $propositionReunion->setPropositionId($nextId);
    
    $form = $this->createForm(PropositionReunionType::class, $propositionReunion); // Retirez l'option groupe_id
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($propositionReunion);
        $entityManager->flush();

        $this->addFlash('success', 'Proposition de réunion créée avec succès.');
        
        return $this->redirectToRoute('app_groupe_projet_show', [
            'id' => $groupeId
        ], Response::HTTP_SEE_OTHER);
    }

    return $this->render('proposition_reunion/new.html.twig', [
        'proposition_reunion' => $propositionReunion,
        'form' => $form,
        'groupe_projet' => $groupeProjet,
    ]);
}
    #[Route('/{id}', name: 'app_proposition_reunion_show', methods: ['GET'])]
    public function show(int $groupeId, PropositionReunion $propositionReunion): Response
    {
        // Verify the proposition belongs to the group
        if ($propositionReunion->getIdGroupe()->getId() !== $groupeId) {
            throw $this->createNotFoundException('Cette proposition ne correspond pas au groupe');
        }
        
        return $this->render('proposition_reunion/show.html.twig', [
            'proposition_reunion' => $propositionReunion,
            'groupe_projet' => $propositionReunion->getIdGroupe(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proposition_reunion_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, int $groupeId, PropositionReunion $propositionReunion, EntityManagerInterface $entityManager): Response
{
    // Verify the proposition belongs to the group
    if ($propositionReunion->getIdGroupe()->getId() !== $groupeId) {
        throw $this->createNotFoundException('Cette proposition ne correspond pas au groupe');
    }
    
    $form = $this->createForm(PropositionReunionType::class, $propositionReunion); // Retirez l'option groupe_id
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        $this->addFlash('success', 'Proposition de réunion modifiée avec succès.');
        
        return $this->redirectToRoute('app_groupe_projet_show', [
            'id' => $groupeId
        ], Response::HTTP_SEE_OTHER);
    }

    return $this->render('proposition_reunion/edit.html.twig', [
        'proposition_reunion' => $propositionReunion,
        'form' => $form,
        'groupe_projet' => $propositionReunion->getIdGroupe(),
    ]);
}
    #[Route('/{id}', name: 'app_proposition_reunion_delete', methods: ['POST'])]
    public function delete(Request $request, int $groupeId, PropositionReunion $propositionReunion, EntityManagerInterface $entityManager): Response
    {
        // Verify the proposition belongs to the group
        if ($propositionReunion->getIdGroupe()->getId() !== $groupeId) {
            throw $this->createNotFoundException('Cette proposition ne correspond pas au groupe');
        }
        
        if ($this->isCsrfTokenValid('delete'.$propositionReunion->getId(), $request->request->get('_token'))) {
            $entityManager->remove($propositionReunion);
            $entityManager->flush();
            
            $this->addFlash('success', 'Proposition de réunion supprimée avec succès.');
        }

        return $this->redirectToRoute('app_groupe_projet_show', [
            'id' => $groupeId
        ], Response::HTTP_SEE_OTHER);
    }
}