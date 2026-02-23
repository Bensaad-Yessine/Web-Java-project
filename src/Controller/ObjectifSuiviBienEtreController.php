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

final class ObjectifSuiviBienEtreController extends AbstractController
{
    // ✅ LIST suivis ديال objectif + tri par date DESC
    #[Route('/objectif/sante/{id}/suivis', name: 'app_objectif_suivis', methods: ['GET'])]
    public function index(ObjectifSante $objectif, SuiviBienEtreRepository $repo): Response
    {
        $suivis = $repo->findBy(['objectif' => $objectif], ['dateSaisie' => 'DESC']);

        return $this->render('suivi_bien_etre/by_objectif.html.twig', [
            'objectif' => $objectif,
            'suivis' => $suivis,
        ]);
    }

    // ✅ ADD suivi مربوط مباشرة بذاك objectif
    #[Route('/objectif/sante/{id}/suivis/new', name: 'app_objectif_suivi_new', methods: ['GET', 'POST'])]
   public function new(ObjectifSante $objectif, Request $request, EntityManagerInterface $em): Response
{
    $suivi = new SuiviBienEtre();
    $suivi->setObjectif($objectif);

    $form = $this->createForm(SuiviBienEtreType::class, $suivi, [
        'disable_objectif' => true,
    ]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $suivi->setScore($suivi->calculerScore());

        $em->persist($suivi);
        $em->flush();

        $this->addFlash('success', 'Suivi créé avec succès !');
        return $this->redirectToRoute('app_objectif_suivis', ['id' => $objectif->getId()]);
    }

    // Si le formulaire est soumis mais pas valide, affichez les erreurs
    if ($form->isSubmitted() && !$form->isValid()) {
        $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
    }

    return $this->render('suivi_bien_etre/new_for_objectif.html.twig', [
        'objectif' => $objectif,
        'form' => $form->createView(),
    ]);
}

    // ✅ EDIT suivi (خاصنا نضمنو بلي تابع لداك objectif)
    #[Route('/objectif/sante/{id}/suivis/{suiviId}/edit', name: 'app_objectif_suivi_edit', methods: ['GET', 'POST'])]
    public function edit(
        ObjectifSante $objectif,
        int $suiviId,
        SuiviBienEtreRepository $repo,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $suivi = $repo->find($suiviId);

        if (!$suivi || $suivi->getObjectif()?->getId() !== $objectif->getId()) {
            throw $this->createNotFoundException('Suivi not found for this objectif.');
        }

        $form = $this->createForm(SuiviBienEtreType::class, $suivi, [
            'disable_objectif' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $suivi->setScore($suivi->calculerScore());
            $em->flush();

            // ✅ Le score moyen est calculé automatiquement via getScoreMoyen()

            return $this->redirectToRoute('app_objectif_suivis', ['id' => $objectif->getId()]);
        }
        if ($form->isSubmitted() && !$form->isValid()) {
    $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
}

        return $this->render('suivi_bien_etre/edit_for_objectif.html.twig', [
            'objectif' => $objectif,
            'suivi' => $suivi,
            'form' => $form->createView(),
        ]);
    }

    // ✅ DELETE
    #[Route('/objectif/sante/{id}/suivis/{suiviId}/delete', name: 'app_objectif_suivi_delete', methods: ['POST'])]
    public function delete(
        ObjectifSante $objectif,
        int $suiviId,
        SuiviBienEtreRepository $repo,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $suivi = $repo->find($suiviId);

        if (!$suivi || $suivi->getObjectif()?->getId() !== $objectif->getId()) {
            throw $this->createNotFoundException('Suivi not found for this objectif.');
        }

        if ($this->isCsrfTokenValid('delete_suivi'.$suivi->getId(), $request->request->get('_token'))) {
            $em->remove($suivi);
            $em->flush();

            // ✅ Le score moyen est calculé automatiquement via getScoreMoyen()
        }

        return $this->redirectToRoute('app_objectif_suivis', ['id' => $objectif->getId()]);
    }
    #[Route('/objectif/sante/{id}/suivis/filter', name: 'app_objectif_suivis_filter', methods: ['GET'])]
public function filter(
    ObjectifSante $objectif,
    Request $request,
    EntityManagerInterface $em
): Response {
    $humeur  = $request->query->get('humeur');          // "1".."5" or ""
    $sortBy  = $request->query->get('sortBy', 'date');  // date | score
    $sortDir = strtoupper($request->query->get('sortDir', 'DESC')); // ASC | DESC
    $q       = trim((string) $request->query->get('q', '')); // search text

    // sécurité
    if (!in_array($sortBy, ['date', 'score'], true)) $sortBy = 'date';
    if (!in_array($sortDir, ['ASC', 'DESC'], true)) $sortDir = 'DESC';

    $orderField = $sortBy === 'score' ? 's.score' : 's.dateSaisie';

    $qb = $em->getRepository(SuiviBienEtre::class)->createQueryBuilder('s')
        ->andWhere('s.objectif = :obj')
        ->setParameter('obj', $objectif)
        ->orderBy($orderField, $sortDir);

    // humeur filter
  if ($humeur !== null) {
    $humeur = trim((string) $humeur);
    if ($humeur !== '') {
        $qb->andWhere('s.humeur = :h')
           ->setParameter('h', $humeur);
    }
}
    // search filter (notes + ممكن تزيد حقول أخرى)
    if ($q !== '') {
        $qb->andWhere('LOWER(s.notesLibres) LIKE :q')
           ->setParameter('q', '%' . mb_strtolower($q) . '%');
    }

    $suivis = $qb->getQuery()->getResult();

    return $this->render('suivi_bien_etre/_rows.html.twig', [
        'objectif' => $objectif,
        'suivis' => $suivis,
    ]);
}

}
