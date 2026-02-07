<?php

namespace App\Controller;

use App\Entity\ObjectifSante;
use App\Form\ObjectifSanteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/objectif')]
final class ObjectifSanteController extends AbstractController
{
    #[Route('/', name: 'app_objectif_index')]
    public function index(EntityManagerInterface $em): Response
    {
        $objectifs = $em->getRepository(ObjectifSante::class)->findAll();

        return $this->render('objectif/show.html.twig', [
            'objectifs' => $objectifs,
        ]);
    }

    #[Route('/add', name: 'app_objectif_add')]
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        $objectif = new ObjectifSante();
        $objectif->setStatut('EN_COURS');
        $objectif->setProgression(0);

        $form = $this->createForm(ObjectifSanteType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ✅ Contrôle des dates
            if ($objectif->getDateFin() < $objectif->getDateDebut()) {
                $this->addFlash('danger', 'La date de fin doit être postérieure à la date de début.');
                return $this->render('objectif/add.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            // ✅ Contrôle valeur cible حسب النوع
            $type = $objectif->getType();
            $v = $objectif->getValeurCible();

            if ($type === 'SOMMEIL' && ($v < 1 || $v > 24)) {
                $this->addFlash('danger', 'Sommeil : la valeur cible doit être comprise entre 1 et 24 heures.');
                return $this->render('objectif/add.html.twig', [
                    'form' => $form->createView()
                ]);
            }

            if ($type === 'STRESS' && ($v < 0 || $v > 10)) {
                $this->addFlash('danger', 'Stress : la valeur cible doit être comprise entre 0 et 10.');
                return $this->render('objectif/add.html.twig', [
                    'form' => $form->createView()
                ]);
            }

            if ($type === 'ALIMENTATION' && ($v < 0 || $v > 10)) {
                $this->addFlash('danger', 'Alimentation : la valeur cible doit être comprise entre 0 et 10.');
                return $this->render('objectif/add.html.twig', [
                    'form' => $form->createView()
                ]);
            }

            if ($type === 'SPORT' && $v < 0) {
                $this->addFlash('danger', 'Sport : la valeur cible doit être supérieure ou égale à 0.');
                return $this->render('objectif/add.html.twig', [
                    'form' => $form->createView()
                ]);
            }

            $em->persist($objectif);
            $em->flush();

            $this->addFlash('success', 'Objectif ajouté avec succès ✅');
            return $this->redirectToRoute('app_objectif_index');
        }

        return $this->render('objectif/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/show', name: 'app_objectif_show')]
    public function show(EntityManagerInterface $em): Response
    {
        $objectifs = $em->getRepository(ObjectifSante::class)->findAll();

        return $this->render('objectif/show.html.twig', [
            'objectifs' => $objectifs,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_objectif_edit')]
    public function edit(Request $request, ObjectifSante $objectif, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ObjectifSanteType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ✅ Contrôle des dates
            if ($objectif->getDateFin() < $objectif->getDateDebut()) {
                $this->addFlash('danger', 'La date de fin doit être postérieure à la date de début.');
                return $this->render('objectif/edit.html.twig', [
                    'form' => $form->createView(),
                    'objectif' => $objectif
                ]);
            }

            $em->flush();

            $this->addFlash('success', 'Objectif modifié avec succès ✏️');
            return $this->redirectToRoute('app_objectif_show');
        }

        return $this->render('objectif/edit.html.twig', [
            'form' => $form->createView(),
            'objectif' => $objectif,
        ]);
    }

    #[Route('/delete/{id}/confirm', name: 'app_objectif_delete_confirm', methods: ['GET'])]
    public function deleteConfirm(ObjectifSante $objectif): Response
    {
        return $this->render('objectif/delete.html.twig', [
            'objectif' => $objectif,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_objectif_delete', methods: ['POST'])]
    public function delete(Request $request, ObjectifSante $objectif, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$objectif->getId(), (string) $request->request->get('_token'))) {
            $em->remove($objectif);
            $em->flush();
            $this->addFlash('success', 'Objectif supprimé avec succès 🗑️');
        }

        return $this->redirectToRoute('app_objectif_show');
    }
}
