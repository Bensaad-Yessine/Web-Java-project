<?php

namespace App\Controller;

use App\Entity\ObjectifSante;
use App\Entity\SuiviBienEtre;
use App\Form\SuiviBienEtreType;
use App\Repository\SuiviBienEtreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/objectif/sante')]
final class FrontSuiviBienEtreController extends AbstractController
{
    // ✅ SHOW: liste des suivis d’un objectif (user connecté فقط)
    #[Route('/{id}/suivis', name: 'front_objectif_suivis', methods: ['GET'])]
    public function index(
        ObjectifSante $objectif,
        SuiviBienEtreRepository $repo
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_USER');

        // ✅ حماية: ممنوع تشوف objectif ماشي ديالك
        if ($objectif->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $suivis = $repo->findByUserAndObjectif($this->getUser()->getId(), $objectif->getId());

        return $this->render('front/suivi_bien_etre/index.html.twig', [
            'objectif' => $objectif,
            'suivis' => $suivis,
        ]);
    }

    // ✅ ADD: ajouter suivi مرتبط ب objectif (user connecté فقط)
    #[Route('/{id}/suivis/new', name: 'front_suivi_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        ObjectifSante $objectif,
        EntityManagerInterface $em
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_USER');

        if ($objectif->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $suivi = new SuiviBienEtre();
        $suivi->setObjectif($objectif);

        // ✅ disable_objectif باش مايبانش select objectif فالفورم
        $form = $this->createForm(SuiviBienEtreType::class, $suivi, [
            'disable_objectif' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ✅ score
            $suivi->setScore($suivi->calculerScore());

            $em->persist($suivi);
            $em->flush();

            $this->addFlash('success', 'Suivi ajouté ✅');

            return $this->redirectToRoute('front_objectif_suivis', [
                'id' => $objectif->getId(),
            ]);
        }

        return $this->render('front/suivi_bien_etre/new.html.twig', [
            'objectif' => $objectif,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{id}/suivis/filter', name: 'front_suivi_filter', methods: ['GET'])]
public function filter(
    Request $request,
    ObjectifSante $objectif,
    SuiviBienEtreRepository $repo
): Response {
    $this->denyAccessUnlessGranted('ROLE_USER');

    if ($objectif->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException();
    }

    $q       = $request->query->get('q');
    $humeur  = $request->query->get('humeur');
    $sortDir = $request->query->get('sortDir', 'DESC'); // ASC/DESC

    // ✅ استعمل QueryBuilder فـ repo (غادي نعطيك تحت)
    $suivis = $repo->searchFrontSuivis($objectif->getId(), $q, $humeur, $sortDir);

    return $this->render('front/suivi_bien_etre/_rows.html.twig', [
        'suivis' => $suivis
    ]);
}
}
