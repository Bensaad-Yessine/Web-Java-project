<?php

namespace App\Controller;

use App\Entity\GroupeProjet;
use App\Entity\PropositionReunion;
use App\Form\GroupeProjetType;
use App\Form\PropositionReunionType;
use App\Repository\GroupeProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/groupe/projet')]
final class FrontGroupeProjetController extends AbstractController
{
    #[Route('', name: 'front_groupe_projet_index', methods: ['GET', 'POST'])]
    public function index(Request $request, GroupeProjetRepository $groupeProjetRepository): Response
    {
        $user = $this->getUser();
        // Un membre ne voit que les groupes dont il fait partie
        $groupesProjets = $user
            ? $groupeProjetRepository->findByMember($user)
            : [];

        $search = $request->get('search', '');
        $sortBy = $request->get('sortBy', 'createdAt');
        $sortOrder = $request->get('sortOrder', 'DESC');

        if ($search) {
            $groupesProjets = array_filter($groupesProjets, function ($groupe) use ($search) {
                return stripos($groupe->getNomProjet(), $search) !== false;
            });
        }

        usort($groupesProjets, function ($a, $b) use ($sortBy, $sortOrder) {
            $aValue = match ($sortBy) {
                'id' => $a->getId(),
                'members' => $a->getNbrMembre() ?? 0,
                'createdAt' => $a->getCreatedAt() ? $a->getCreatedAt()->getTimestamp() : 0,
                default => $a->getCreatedAt() ? $a->getCreatedAt()->getTimestamp() : 0,
            };
            $bValue = match ($sortBy) {
                'id' => $b->getId(),
                'members' => $b->getNbrMembre() ?? 0,
                'createdAt' => $b->getCreatedAt() ? $b->getCreatedAt()->getTimestamp() : 0,
                default => $b->getCreatedAt() ? $b->getCreatedAt()->getTimestamp() : 0,
            };
            $result = $aValue <=> $bValue;
            return $sortOrder === 'ASC' ? $result : -$result;
        });

        if ($request->isXmlHttpRequest()) {
            $html = '';
            foreach ($groupesProjets as $groupe) {
                $html .= $this->renderView('front/groupe/_group_card.html.twig', ['groupe' => $groupe]);
            }
            return $this->json([
                'success' => true,
                'html' => $html,
                'count' => count($groupesProjets),
            ]);
        }

        return $this->render('front/groupe/index.html.twig', [
            'groupe_projets' => $groupesProjets,
            'current_page' => 'groupes', // <-- new

        ]);
    }

    #[Route('/new', name: 'front_groupe_projet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $groupeProjet = new GroupeProjet();
        $groupeProjet->setCreatedAt(new \DateTimeImmutable());
        $groupeProjet->setCreatedBy($user);
        $groupeProjet->addIdUser($user); // Le créateur est toujours membre

        $form = $this->createForm(GroupeProjetType::class, $groupeProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // S'assurer que le créateur reste membre
            if (!$groupeProjet->getIdUser()->contains($user)) {
                $groupeProjet->addIdUser($user);
            }
            $groupeProjet->setNbrMembre($groupeProjet->getIdUser()->count());
            $entityManager->persist($groupeProjet);
            $entityManager->flush();

            $this->addFlash('success', 'Groupe créé avec succès!');
            return $this->redirectToRoute('front_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('front/groupe/new.html.twig', [
            'groupe_projet' => $groupeProjet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/proposition/new', name: 'front_proposition_reunion_new', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function newProposition(Request $request, GroupeProjet $groupeProjet, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $isMember = $user && $groupeProjet->getIdUser()->contains($user);
        if (!$isMember && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Vous ne faites pas partie de ce groupe.');
        }

        $propositionReunion = new PropositionReunion();
        $propositionReunion->setIdGroupe($groupeProjet);
        if (method_exists($propositionReunion, 'setDateCreation')) {
            $propositionReunion->setDateCreation(new \DateTime());
        }
        if (method_exists($propositionReunion, 'setPropositionId')) {
            $propositionReunion->setPropositionId(0);
        }

        $form = $this->createForm(PropositionReunionType::class, $propositionReunion, [
            'status_choices' => [
                'En attente' => 'En attente',
                'Proposé' => 'Proposé',
            ],
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($propositionReunion);
            $entityManager->flush();
            $this->addFlash('success', 'Proposition de réunion créée avec succès!');
            return $this->redirectToRoute('front_groupe_projet_show', ['id' => $groupeProjet->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('front/proposition/new.html.twig', [
            'groupe_projet' => $groupeProjet,
            'proposition_reunion' => $propositionReunion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'front_groupe_projet_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(GroupeProjet $groupeProjet, \App\Repository\PropositionReunionRepository $propositionRepo): Response
    {
        $user = $this->getUser();
        $isMember = $user && $groupeProjet->getIdUser()->contains($user);
        if (!$isMember && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Vous ne faites pas partie de ce groupe.');
        }

        $propositions = $propositionRepo->findBy(['idGroupe' => $groupeProjet->getId()], ['dateCreation' => 'DESC']);

        return $this->render('front/groupe/show.html.twig', [
            'groupe_projet' => $groupeProjet,
            'propositions' => $propositions,
        ]);
    }

    #[Route('/{id}/edit', name: 'front_groupe_projet_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, GroupeProjet $groupeProjet, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $owner = $groupeProjet->getCreatedBy();
        $isOwner = $user && $owner && $owner->getId() === $user->getId();
        $isAdmin = $this->isGranted('ROLE_ADMIN');
        if (!$isOwner && !$isAdmin) {
            throw $this->createAccessDeniedException('Seul le créateur du groupe (ou un admin) peut modifier ce groupe.');
        }

        $form = $this->createForm(GroupeProjetType::class, $groupeProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $groupeProjet->setNbrMembre($groupeProjet->getIdUser()->count());
            $groupeProjet->setUpdatedAt(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'Groupe modifié avec succès!');
            return $this->redirectToRoute('front_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('front/groupe/edit.html.twig', [
            'groupe_projet' => $groupeProjet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'front_groupe_projet_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, GroupeProjet $groupeProjet, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $owner = $groupeProjet->getCreatedBy();
        $isOwner = $user && $owner && $owner->getId() === $user->getId();
        $isAdmin = $this->isGranted('ROLE_ADMIN');
        if (!$isOwner && !$isAdmin) {
            throw $this->createAccessDeniedException('Seul le créateur du groupe (ou un admin) peut supprimer ce groupe.');
        }

        if ($this->isCsrfTokenValid('delete'.$groupeProjet->getId(), $request->request->get('_token'))) {
            foreach ($groupeProjet->getIdUser()->toArray() as $u) {
                $groupeProjet->removeIdUser($u);
            }
            $entityManager->flush();
            $entityManager->remove($groupeProjet);
            $entityManager->flush();
            $this->addFlash('success', 'Groupe supprimé avec succès!');
        }

        return $this->redirectToRoute('front_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/propositions', name: 'front_proposition_reunion_index', methods: ['GET'])]
    public function indexPropositions(\App\Repository\PropositionReunionRepository $propositionRepo): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer toutes les propositions des groupes dont l'utilisateur fait partie
        $propositions = $propositionRepo->createQueryBuilder('p')
            ->join('p.idGroupe', 'g')
            ->join('g.idUser', 'u')
            ->where('u.id = :userId')
            ->setParameter('userId', $user->getId())
            ->orderBy('p.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('front/proposition/index.html.twig', [
            'propositions' => $propositions,
        ]);
    }

    #[Route('/proposition/{id}', name: 'front_proposition_reunion_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showProposition(PropositionReunion $proposition): Response
    {
        $user = $this->getUser();
        $groupeProjet = $proposition->getIdGroupe();
        $isMember = $user && $groupeProjet->getIdUser()->contains($user);
        
        if (!$isMember && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Vous ne faites pas partie de ce groupe.');
        }

        return $this->render('front/proposition/show.html.twig', [
            'proposition_reunion' => $proposition,
            'groupe_projet' => $groupeProjet,
        ]);
    }

    #[Route('/proposition/{id}/edit', name: 'front_proposition_reunion_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function editProposition(Request $request, PropositionReunion $proposition, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $groupeProjet = $proposition->getIdGroupe();
        $isMember = $user && $groupeProjet->getIdUser()->contains($user);
        
        if (!$isMember && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Vous ne faites pas partie de ce groupe.');
        }

        $form = $this->createForm(PropositionReunionType::class, $proposition, [
            'status_choices' => [
                'En attente' => 'En attente',
                'Proposé' => 'Proposé',
            ],
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Proposition de réunion modifiée avec succès!');
            return $this->redirectToRoute('front_proposition_reunion_show', ['id' => $proposition->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('front/proposition/edit.html.twig', [
            'proposition_reunion' => $proposition,
            'groupe_projet' => $groupeProjet,
            'form' => $form,
        ]);
    }

    #[Route('/proposition/{id}/delete', name: 'front_proposition_reunion_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function deleteProposition(Request $request, PropositionReunion $proposition, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $groupeProjet = $proposition->getIdGroupe();
        $isMember = $user && $groupeProjet->getIdUser()->contains($user);
        
        if (!$isMember && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Vous ne faites pas partie de ce groupe.');
        }

        if ($this->isCsrfTokenValid('delete'.$proposition->getId(), $request->request->get('_token'))) {
            $groupeId = $groupeProjet->getId();
            $entityManager->remove($proposition);
            $entityManager->flush();
            $this->addFlash('success', 'Proposition de réunion supprimée avec succès!');
            return $this->redirectToRoute('front_groupe_projet_show', ['id' => $groupeId], Response::HTTP_SEE_OTHER);
        }

        return $this->redirectToRoute('front_proposition_reunion_show', ['id' => $proposition->getId()], Response::HTTP_SEE_OTHER);
    }
}
