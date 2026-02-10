<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Form\TacheType;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\SuiviTache;

#[Route('/tache')]
final class TacheController extends AbstractController
{
    
    #[Route(name: 'app_tache_index', methods: ['GET'])]
    public function index(Request $request, TacheRepository $repo): Response
    {
        $titre = $request->query->get('titre');
        $email = $request->query->get('email');
        $sort  = $request->query->get('sort', 'desc');

        // ✅ ADD filters (that was the missing part)
        $type     = $request->query->get('type');
        $statut   = $request->query->get('statut');
        $priorite = $request->query->get('priorite');

        // ✅ same method, just pass more params
        $taches = $repo->searchAjax(
            $titre,
            $email,
            $sort,
            $type,
            $statut,
            $priorite
        );

        // ✅ AJAX = return only rows (THIS fixes refresh issue)
        if ($request->isXmlHttpRequest()) {
            return $this->render('tache/_rows.html.twig', [
                'taches' => $taches,
            ]);
        }

        // ✅ normal page load
        return $this->render('tache/index.html.twig', [
            'taches'  => $taches,
            'titre'   => $titre,
            'email'   => $email,
            'sort'    => $sort,
            'type'    => $type,
            'statut'  => $statut,
            'priorite'=> $priorite,
        ]);
    }

    #[Route('/new', name: 'app_tache_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tache = new Tache();
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $repo = $entityManager->getRepository(Tache::class);    
            $user = $tache->getUser(); // returns User entity
            $userId = $user->getId();

            $overlap = $repo->findOverlappingTasks(
                $tache->getDateDebut(),
                $tache->getDateFin(),
                $userId
            );
            if (count($overlap) > 0) {
                $this->addFlash('error', 'Une autre tâche existe déjà pendant cet intervalle !');

                return $this->render('tache/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $entityManager->persist($tache);

            // Create initial status history
            $suivi = new \App\Entity\SuiviTache();
            $suivi->setTache($tache);
            $suivi->setAncienStatut(null);
            $suivi->setNouveauStatut($tache->getStatut());
            $suivi->setDateAction(new \DateTime());
            $entityManager->persist($suivi);

            $entityManager->flush();

            $this->addFlash('success', 'Tâche ajoutée avec succès !');
            return $this->redirectToRoute('app_tache_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tache/new.html.twig', [
            'taches' => $tache,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tache_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tache $tache, EntityManagerInterface $entityManager, TacheRepository $tacheRepository): Response
    {
        // Create the form and handle the request
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        // Only handle submission
        if ($form->isSubmitted()) {

            // Validate form
            if ($form->isValid()) {

                // Get user ID safely
                $user = $tache->getUser();
                $userId = $user ? $user->getId() : null;

                // Check for overlapping tasks, excluding current task
                $overlap = $tacheRepository->findOverlappingTasks(
                    $tache->getDateDebut(),
                    $tache->getDateFin(),
                    $userId,
                    $tache->getId()
                );

                if (count($overlap) > 0) {
                    $this->addFlash('error', 'Une autre tâche existe déjà pendant cet intervalle !');

                    return $this->render('tache/edit.html.twig', [
                        'tache' => $tache,
                        'form' => $form->createView(),
                    ]);
                }

                // Save changes
                $entityManager->flush();

                $this->addFlash('success', 'Tâche modifiée avec succès !');

                // ✅ Turbo requires redirect after POST
                return $this->redirectToRoute('app_tache_index');
            }

            // If form is invalid, show errors
            $this->addFlash('error', 'Le formulaire contient des erreurs. Veuillez vérifier les champs.');

            return $this->render('tache/edit.html.twig', [
                'tache' => $tache,
                'form' => $form->createView(),
            ]);
        }

        // First load: show the edit form
        return $this->render('tache/edit.html.twig', [
            'tache' => $tache,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tache_show', methods: ['GET'])]
    public function show(Tache $tache): Response
    {
        return $this->render('tache/show.html.twig', [
            'tache' => $tache,
        ]);
    }



    #[Route('/{id}', name: 'app_tache_delete', methods: ['POST'])]
    public function delete(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tache->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($tache);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_tache_index', [], Response::HTTP_SEE_OTHER);
    }

    //suivi tache history
    #[Route('/{id}/action', name: 'app_tache_action', methods: ['POST'])]
    public function action(Request $request, Tache $tache, EntityManagerInterface $em): Response
    {
        $newStatus = $request->request->get('action');
        $currentStatus = $tache->getStatut();

        if ($newStatus && $newStatus !== $currentStatus) {
            // 1️⃣ Create SuiviTache entry
            $suivi = new SuiviTache();
            $suivi->setTache($tache);
            $suivi->setAncienStatut($currentStatus);
            $suivi->setNouveauStatut($newStatus);
            $suivi->setDateAction(new \DateTime());

            $em->persist($suivi);

            // 2️⃣ Update the Tache status
            $tache->setStatut($newStatus);

            $em->flush();

            $this->addFlash('success', 'Statut mis à jour !');
        }

        return $this->redirectToRoute('app_tache_show', ['id' => $tache->getId()]);
    }


    //search 
    #[Route('/search-by-title', name: 'app_tache_search_by_title', methods: ['GET'])]
    public function searchByTitle(Request $request, TacheRepository $tacheRepository): Response
    {
        $titre = $request->query->get('titre');
        
        // Trim and check if actually has content
        $titre = $titre ? trim($titre) : null;
        
        // If empty after trim, treat as null (no search)
        if ($titre === '') {
            $titre = null;
        }

        $taches = $tacheRepository->searchByTitre($titre);

        return $this->render('tache/index.html.twig', [
            'taches' => $taches,
            'titre' => $titre, // This will be null if no actual search term
        ]);
    }

    // filter by user email
    #[Route('/search-by-email', name: 'app_tache_search_by_email', methods: ['GET'])]
    public function searchByEmail(Request $request, TacheRepository $tacheRepository): Response
    {
        $email = $request->query->get('email');
        $email = $email ? trim($email) : null;

        $taches = $tacheRepository->searchByUserEmail($email);

        return $this->render('tache/index.html.twig', [
            'taches' => $taches,
            'email' => $email,
        ]);
    }




}
