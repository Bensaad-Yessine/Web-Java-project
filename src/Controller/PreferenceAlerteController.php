<?php

namespace App\Controller;

use App\Entity\PreferenceAlerte;
use App\Form\PreferenceAlerteType;
use App\Repository\PreferenceAlerteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/preference/alerte')]
final class PreferenceAlerteController extends AbstractController
{
    #[Route(name: 'app_preference_alerte_index', methods: ['GET'])]
    public function index(PreferenceAlerteRepository $preferenceAlerteRepository): Response
    {
        return $this->render('preference_alerte/index.html.twig', [
            'preference_alertes' => $preferenceAlerteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_preference_alerte_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $preferenceAlerte = new PreferenceAlerte();
        $form = $this->createForm(PreferenceAlerteType::class, $preferenceAlerte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Force template logic
            $preferenceAlerte->setEtudiant(null);
            $preferenceAlerte->setIsDefault(true);
            $preferenceAlerte->setIsActive(false);

            $entityManager->persist($preferenceAlerte);
            $entityManager->flush();

            return $this->redirectToRoute('app_preference_alerte_index');
        }

        return $this->render('preference_alerte/new.html.twig', [
            'form' => $form,
        ]);
    }

/*
    #[Route('/new', name: 'app_preference_alerte_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $preferenceAlerte = new PreferenceAlerte();
        $form = $this->createForm(PreferenceAlerteType::class, $preferenceAlerte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($preferenceAlerte);
            $entityManager->flush();

            return $this->redirectToRoute('app_preference_alerte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('preference_alerte/new.html.twig', [
            'preference_alerte' => $preferenceAlerte,
            'form' => $form,
        ]);
    }
*/
    #[Route('/{id}', name: 'app_preference_alerte_show', methods: ['GET'])]
    public function show(PreferenceAlerte $preferenceAlerte): Response
    {
        return $this->render('preference_alerte/show.html.twig', [
            'preference_alerte' => $preferenceAlerte,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_preference_alerte_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PreferenceAlerte $preferenceAlerte, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PreferenceAlerteType::class, $preferenceAlerte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_preference_alerte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('preference_alerte/edit.html.twig', [
            'preference_alerte' => $preferenceAlerte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_preference_alerte_delete', methods: ['POST'])]
    public function delete(Request $request, PreferenceAlerte $preferenceAlerte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$preferenceAlerte->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($preferenceAlerte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_preference_alerte_index', [], Response::HTTP_SEE_OTHER);
    }
}
