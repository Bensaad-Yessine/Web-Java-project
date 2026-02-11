<?php

namespace App\Controller;

use App\Entity\GroupeProjet;
use App\Form\GroupeProjetType;
use App\Repository\GroupeProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/groupe/projet')]
class GroupeProjetController extends AbstractController
{
    // NOUVELLE ROUTE POUR FRONT OFFICE
    #[Route('/front-office', name: 'front_office_groupes', methods: ['GET'])]
    public function frontOffice(GroupeProjetRepository $groupeProjetRepository): Response
    {
        return $this->render('front_office/groupes.html.twig', [
            'groupes' => $groupeProjetRepository->findAll(),
        ]);
    }

    // Route pour le back office (admin)
    #[Route('/', name: 'app_groupe_projet_index', methods: ['GET'])]
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

            $this->addFlash('success', 'Groupe créé avec succès!');
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
        
        // Handle AJAX request
        if ($request->isXmlHttpRequest() && $request->isMethod('POST')) {
            $form->submit($request->request->all()[$form->getName()] ?? [], false);
            
            if ($form->isValid()) {
                try {
                    if (method_exists($groupeProjet, 'setUpdatedAt')) {
                        $groupeProjet->setUpdatedAt(new \DateTime());
                    }
                    $entityManager->flush();
                    
                    return new JsonResponse([
                        'success' => true,
                        'message' => 'Groupe modifié avec succès!',
                        'redirect' => $this->generateUrl('app_groupe_projet_index')
                    ]);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'success' => false,
                        'message' => 'Erreur: ' . $e->getMessage()
                    ], 500);
                }
            } else {
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = $error->getMessage();
                }
                
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Erreurs de validation',
                    'errors' => $errors
                ], 400);
            }
        }
        
        // Handle regular form submission
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            if (method_exists($groupeProjet, 'setUpdatedAt')) {
                $groupeProjet->setUpdatedAt(new \DateTime());
            }
            $entityManager->flush();
            
            $this->addFlash('success', 'Groupe modifié avec succès!');
            return $this->redirectToRoute('app_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('groupe_projet/edit.html.twig', [
            'groupe_projet' => $groupeProjet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_projet_delete', methods: ['POST', 'DELETE'])]
    public function delete(Request $request, GroupeProjet $groupeProjet, EntityManagerInterface $entityManager): Response
    {
        // Handle AJAX request
        if ($request->isXmlHttpRequest()) {
            if ($this->isCsrfTokenValid('delete'.$groupeProjet->getId(), $request->request->get('_token'))) {
                try {
                    $entityManager->remove($groupeProjet);
                    $entityManager->flush();
                    
                    return new JsonResponse([
                        'success' => true,
                        'message' => 'Groupe supprimé avec succès!',
                        'redirect' => $this->generateUrl('app_groupe_projet_index')
                    ]);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'success' => false,
                        'message' => 'Erreur: ' . $e->getMessage()
                    ], 500);
                }
            }
            
            return new JsonResponse([
                'success' => false,
                'message' => 'Token CSRF invalide'
            ], 400);
        }
        
        // Regular POST request
        if ($this->isCsrfTokenValid('delete'.$groupeProjet->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($groupeProjet);
            $entityManager->flush();
            
            $this->addFlash('success', 'Groupe supprimé avec succès!');
        }

        return $this->redirectToRoute('app_groupe_projet_index', [], Response::HTTP_SEE_OTHER);
    }
}