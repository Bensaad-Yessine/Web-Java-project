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

        // Handle AJAX request
        if ($request->isXmlHttpRequest()) {
            if ($form->isSubmitted() && $form->isValid()) {
                try {
                    $entityManager->persist($groupeProjet);
                    $entityManager->flush();
                    
                    return $this->json([
                        'success' => true,
                        'message' => 'Groupe créé avec succès!',
                        'redirect' => $this->generateUrl('app_groupe_projet_index')
                    ]);
                } catch (\Exception $e) {
                    return $this->json([
                        'success' => false,
                        'message' => 'Erreur: ' . $e->getMessage()
                    ], 400);
                }
            }
            
            // Form has errors
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }
            
            return $this->json([
                'success' => false,
                'message' => 'Erreurs de validation',
                'errors' => $errors
            ], 400);
        }

        // Handle regular GET/POST request
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
    // Create form
    $form = $this->createForm(GroupeProjetType::class, $groupeProjet);
    $form->handleRequest($request);

    // Handle AJAX request using the Symfony form (more reliable)
    if ($request->isXmlHttpRequest()) {
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $groupeProjet->setUpdatedAt(new \DateTime());
                $entityManager->flush();

                return $this->json([
                    'success' => true,
                    'message' => 'Groupe modifié avec succès!',
                    'redirect' => $this->generateUrl('app_groupe_projet_index')
                ]);
            } catch (\Exception $e) {
                return $this->json([
                    'success' => false,
                    'message' => 'Erreur de base de données: ' . $e->getMessage()
                ], 500);
            }
        }

        // Collect form errors
        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }

        return $this->json([
            'success' => false,
            'message' => 'Erreurs de validation',
            'errors' => $errors
        ], 400);
    }

    // Handle regular form submission
    if ($form->isSubmitted() && $form->isValid()) {
            try {
            $groupeProjet->setUpdatedAt(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'Groupe modifié avec succès!');
            return $this->redirectToRoute('app_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur: ' . $e->getMessage());
        }
    }

    return $this->render('groupe_projet/edit.html.twig', [
        'groupe_projet' => $groupeProjet,
        'form' => $form,
    ]);
}

    #[Route('/{id}', name: 'app_groupe_projet_delete', methods: ['POST'])]
    public function delete(Request $request, GroupeProjet $groupeProjet, EntityManagerInterface $entityManager): Response
    {
        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('delete'.$groupeProjet->getId(), $token)) {
            if ($request->isXmlHttpRequest()) {
                return $this->json(['success' => false, 'message' => 'Jeton CSRF invalide.'], 400);
            }

            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_groupe_projet_index');
        }

        // Clear ManyToMany associations to avoid FK constraint issues
        foreach ($groupeProjet->getIdUser()->toArray() as $user) {
            $groupeProjet->removeIdUser($user);
        }

        // At this point, orphanRemoval on idReunion will remove child entities automatically

        // Handle AJAX request
        if ($request->isXmlHttpRequest()) {
            try {
                $entityManager->flush();
                $entityManager->remove($groupeProjet);
                $entityManager->flush();

                return $this->json([
                    'success' => true,
                    'message' => 'Groupe supprimé avec succès!',
                    'redirect' => $this->generateUrl('app_groupe_projet_index')
                ]);
            } catch (\Exception $e) {
                return $this->json([
                    'success' => false,
                    'message' => 'Erreur: ' . $e->getMessage()
                ], 500);
            }
        }

        // Traditional form submission
        try {
            $entityManager->flush();
            $entityManager->remove($groupeProjet);
            $entityManager->flush();
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la suppression: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
    }
}
