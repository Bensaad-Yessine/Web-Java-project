<?php

namespace App\Controller;

use App\Entity\ObjectifSante;
use App\Form\ObjectifSanteType;
use App\Repository\ObjectifSanteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('/objectif/sante')]
final class ObjectifSanteController extends AbstractController
{
    #[Route(name: 'app_objectif_sante_index', methods: ['GET'])]
    public function index(ObjectifSanteRepository $objectifSanteRepository): Response
    {
        return $this->render('objectif_sante/index.html.twig', [
            'objectif_santes' => $objectifSanteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_objectif_sante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $objectifSante = new ObjectifSante();
        $form = $this->createForm(ObjectifSanteType::class, $objectifSante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($objectifSante);
            $entityManager->flush();

            return $this->redirectToRoute('app_objectif_sante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('objectif_sante/new.html.twig', [
            'objectif_sante' => $objectifSante,
            'form' => $form,
        ]);
    }
#[Route('/filter', name: 'app_objectif_sante_filter', methods: ['GET'])]
public function filter(Request $request, ObjectifSanteRepository $repo): JsonResponse
{
    $type = (string) $request->query->get('type', 'ALL');
    $priorite = (string) $request->query->get('priorite', 'ALL');
    $q = (string) $request->query->get('q', '');
    $sort = (string) $request->query->get('sort', 'dateDebut');
    $dir = strtoupper((string) $request->query->get('dir', 'DESC'));

    // sécurité
    if (!in_array($dir, ['ASC', 'DESC'], true)) {
        $dir = 'DESC';
    }

    $objectifs = $repo->findFiltered($type, $priorite, $q, $sort, $dir);

    $html = $this->renderView('objectif_sante/_rows.html.twig', [
        'objectif_santes' => $objectifs
    ]);

    return $this->json(['html' => $html]);
}


    #[Route('/{id}', name: 'app_objectif_sante_show', methods: ['GET'])]
    public function show(ObjectifSante $objectifSante): Response
    {
        return $this->render('objectif_sante/show.html.twig', [
            'objectif_sante' => $objectifSante,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_objectif_sante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ObjectifSante $objectifSante, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ObjectifSanteType::class, $objectifSante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
             $this->addFlash('success', 'L\'objectif de santé a été modifié avec succès !');

            return $this->redirectToRoute('app_objectif_sante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('objectif_sante/edit.html.twig', [
            'objectif_sante' => $objectifSante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_objectif_sante_delete', methods: ['POST'])]
    public function delete(Request $request, ObjectifSante $objectifSante, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$objectifSante->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($objectifSante);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_objectif_sante_index', [], Response::HTTP_SEE_OTHER);
    }
  

}
