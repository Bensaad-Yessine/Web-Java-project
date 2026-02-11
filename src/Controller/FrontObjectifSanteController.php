<?php

namespace App\Controller;

use App\Entity\ObjectifSante;
use App\Form\ObjectifSante2Type;
use App\Repository\ObjectifSanteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/objectif/sante')]
final class FrontObjectifSanteController extends AbstractController
{
    #[Route('', name: 'front_objectif_sante_index', methods: ['GET'])]
    public function index(ObjectifSanteRepository $repo): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();

        $objectifs = $repo->findBy(['user' => $user], ['dateDebut' => 'DESC']);

        return $this->render('front/objectif_sante/index.html.twig', [
            'objectif_santes' => $objectifs,
        ]);
    }

    #[Route('/new', name: 'front_objectif_sante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();

        $objectif = new ObjectifSante();
        $objectif->setUser($user); // ✅ ربط بالـ user

        $form = $this->createForm(ObjectifSante2Type::class, $objectif, [
            'is_front' => true, // option اختيارية إذا بغيت
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($objectif);
            $em->flush();

            $this->addFlash('success', 'Objectif ajouté ✅');
            return $this->redirectToRoute('front_objectif_sante_index');
        }

        return $this->render('front/objectif_sante/new.html.twig', [
            'form' => $form,
            'objectif_sante' => $objectif,
        ]);
    }

    #[Route('/{id}/edit', name: 'front_objectif_sante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ObjectifSante $objectif, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        // ✅ ممنوع تعديل هدف ماشي ديالك
        if ($objectif->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(ObjectifSante2Type::class, $objectif, [
            'is_front' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Objectif modifié ✅');

            return $this->redirectToRoute('front_objectif_sante_index');
        }

        return $this->render('front/objectif_sante/edit.html.twig', [
            'form' => $form,
            'objectif_sante' => $objectif,
        ]);
    }

    #[Route('/{id}', name: 'front_objectif_sante_delete', methods: ['POST'])]
    public function delete(Request $request, ObjectifSante $objectif, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        if ($objectif->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete'.$objectif->getId(), $request->request->get('_token'))) {
            $em->remove($objectif);
            $em->flush();
            $this->addFlash('success', 'Objectif supprimé ✅');
        }

        return $this->redirectToRoute('front_objectif_sante_index');
    }
    #[Route('/{id}', name: 'front_objectif_sante_show', methods: ['GET'])]
public function show(ObjectifSante $objectif): Response
{
    $this->denyAccessUnlessGranted('ROLE_USER');

    // ✅ ممنوع تشوف هدف ماشي ديالك
    if ($objectif->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException();
    }

    return $this->render('front/objectif_sante/show.html.twig', [
        'objectif_sante' => $objectif,
    ]);
}
}
