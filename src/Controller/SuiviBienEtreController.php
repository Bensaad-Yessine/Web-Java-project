<?php

namespace App\Controller;

use App\Entity\SuiviBienEtre;
use App\Form\SuiviBienEtreType;
use App\Repository\SuiviBienEtreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/suivi/bien/etre')]
final class SuiviBienEtreController extends AbstractController
{
    #[Route(name: 'app_suivi_bien_etre_index', methods: ['GET'])]
    public function index(SuiviBienEtreRepository $suiviBienEtreRepository): Response
    {
        return $this->render('suivi_bien_etre/index.html.twig', [
            'suivi_bien_etres' => $suiviBienEtreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_suivi_bien_etre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $suiviBienEtre = new SuiviBienEtre();
        $form = $this->createForm(SuiviBienEtreType::class, $suiviBienEtre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($suiviBienEtre);
            $entityManager->flush();

            return $this->redirectToRoute('app_suivi_bien_etre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('suivi_bien_etre/new.html.twig', [
            'suivi_bien_etre' => $suiviBienEtre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_suivi_bien_etre_show', methods: ['GET'])]
    public function show(SuiviBienEtre $suiviBienEtre): Response
    {
        return $this->render('suivi_bien_etre/show.html.twig', [
            'suivi_bien_etre' => $suiviBienEtre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_suivi_bien_etre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SuiviBienEtre $suiviBienEtre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SuiviBienEtreType::class, $suiviBienEtre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_suivi_bien_etre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('suivi_bien_etre/edit.html.twig', [
            'suivi_bien_etre' => $suiviBienEtre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_suivi_bien_etre_delete', methods: ['POST'])]
    public function delete(Request $request, SuiviBienEtre $suiviBienEtre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$suiviBienEtre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($suiviBienEtre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_suivi_bien_etre_index', [], Response::HTTP_SEE_OTHER);
    }
}
