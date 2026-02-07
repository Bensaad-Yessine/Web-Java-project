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

class TacheController extends AbstractController
{
    #[Route('/showTache', name: 'showTache')]
    public function showTache(TacheRepository $repo): Response
    {
        return $this->render('tache/showTache.html.twig', [
            'taches' => $repo->findAll(),
        ]);
    }

    #[Route('/addTache', name: 'addTache')]
    public function addTache(Request $request, EntityManagerInterface $em, TacheRepository $repo): Response
    {
        $tache = new Tache();
        $form = $this->createForm(TacheType::class, $tache, [
            'attr' => ['novalidate' => 'novalidate']
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ======================
            // Interval uniqueness check
            // Prevent overlapping tasks for the same student
            // ======================
            $overlap = $repo->findOverlappingTasks(
                $tache->getDateDebut(),
                $tache->getDateFin()
            );

            if (count($overlap) > 0) {
                $this->addFlash('error', 'Une autre tâche existe déjà pendant cet intervalle !');
                return $this->render('tache/addTache.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $em->persist($tache);
            $em->flush();

            // ======================
            // Flash message for feedback
            // ======================
            $this->addFlash('success', 'Tâche ajoutée avec succès !');

            return $this->redirectToRoute('showTache');
        }

        return $this->render('tache/addTache.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/editTache', name: 'editTache')]
    public function editTache(Request $request, Tache $tache, EntityManagerInterface $em, TacheRepository $repo): Response
    {
        $form = $this->createForm(TacheType::class, $tache, [
            'attr' => ['novalidate' => 'novalidate']
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Interval uniqueness check for edit (exclude current task)
            $overlap = $repo->findOverlappingTasks(
                $tache->getDateDebut(),
                $tache->getDateFin(),
                $tache->getId() // ignore current task
            );

            if (count($overlap) > 0) {
                $this->addFlash('error', 'Une autre tâche existe déjà pendant cet intervalle !');
                return $this->render('tache/editTache.html.twig', [
                    'form' => $form->createView(),
                    'tache' => $tache,
                ]);
            }

            $em->flush();

            $this->addFlash('success', 'Tâche modifiée avec succès !');

            return $this->redirectToRoute('showTache');
        }

        return $this->render('tache/editTache.html.twig', [
            'form' => $form->createView(),
            'tache' => $tache,
        ]);
    }

    #[Route('/{id}/delete', name: 'deleteTache')]
    public function deleteTache(Request $request, Tache $tache, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tache->getId(), $request->request->get('_token'))) {
            $em->remove($tache);
            $em->flush();

            // Flash message after delete
            $this->addFlash('success', 'Tâche supprimée avec succès !');
        }

        return $this->redirectToRoute('showTache');
    }
    #[Route('/showTacheCalendar', name: 'showTacheCalendar')]
    public function showTacheCalendar(TacheRepository $repo): Response
    {
        $taches = $repo->findAll(); // or filter by student if you have users
        return $this->render('tache/showTacheCalendar.html.twig', [
            'taches' => $taches
        ]);
    }

    //search by titre
    #[Route('/taches/search', name: 'searchTache')]
    public function searchTache(Request $request, TacheRepository $repo): Response
    {
        $titre = $request->query->get('titre',''); //default empty
        //call repository function
        $taches = $repo->searchByTitre($titre);

        return $this->render('tache/showTache.html.twig', [
            'taches' => $taches,
            'titre' => $titre,
        ]);
    }
    
    // filter tasks in days intervale 
    #[Route('/taches/filter', name: 'filterTasks')]
    public function filterTasks(Request $request, TacheRepository $repo): Response
    {
        $startInput = $request->query->get('start');
        $endInput = $request->query->get('end');

        $startDate = $startInput ? new \DateTime($startInput) : null;
        $endDate   = $endInput ? new \DateTime($endInput) : null;

        $tasks = $repo->findTasksInInterval($startDate, $endDate);

        return $this->render('tache/showTache.html.twig', [
            'taches' => $tasks,
        ]);
    }
 

}
