<?php

namespace App\Controller;

use App\Entity\RecommendationBienEtre;
use App\Form\RecommendationBienEtreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/recommendation-bien-etre')]
final class RecommendationBienEtreController extends AbstractController
{
    // ✅ READ ALL
 #[Route('/', name: 'app_recommendation_bien_etre_index')]
public function index(EntityManagerInterface $em): Response
{
    $recommendations = $em->getRepository(RecommendationBienEtre::class)->findAll();

    return $this->render('recommendation_bien_etre/index.html.twig', [
        'recommendations' => $recommendations,
    ]);
}


    // ✅ CREATE
    #[Route('/add', name: 'app_recommendation_bien_etre_add')]
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        $rec = new RecommendationBienEtre();
        $form = $this->createForm(RecommendationBienEtreType::class, $rec);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($rec);
            $em->flush();

            $this->addFlash('success', 'Recommandation ajoutée ✅');
            return $this->redirectToRoute('app_recommendation_bien_etre_index');
        }

        return $this->render('recommendation_bien_etre/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // ✅ READ ONE
    #[Route('/{id}', name: 'app_recommendation_bien_etre_show')]
    public function show(RecommendationBienEtre $rec): Response
    {
        return $this->render('recommendation_bien_etre/show.html.twig', [
            'rec' => $rec,
        ]);
    }

    // ✅ UPDATE
    #[Route('/edit/{id}', name: 'app_recommendation_bien_etre_edit')]
    public function edit(Request $request, RecommendationBienEtre $rec, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(RecommendationBienEtreType::class, $rec);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'Recommandation modifiée ✏️');
            return $this->redirectToRoute('app_recommendation_bien_etre_index');
        }

        return $this->render('recommendation_bien_etre/edit.html.twig', [
            'form' => $form->createView(),
            'rec' => $rec,
        ]);
    }

    // ✅ DELETE
    #[Route('/delete/{id}', name: 'app_recommendation_bien_etre_delete', methods: ['POST'])]
    public function delete(Request $request, RecommendationBienEtre $rec, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rec->getId(), $request->request->get('_token'))) {
            $em->remove($rec);
            $em->flush();

            $this->addFlash('success', 'Recommandation supprimée 🗑️');
        }

        return $this->redirectToRoute('app_recommendation_bien_etre_index');
    }
}
