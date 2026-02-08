<?php

namespace App\Controller;

use App\Entity\SuiviBienEtre;
use App\Entity\ObjectifSante;
use App\Form\SuiviBienEtreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/suivi')]
final class SuiviBienEtreController extends AbstractController
{
    #[Route('/', name: 'app_suivi_bien_etre_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $suivis = $em->getRepository(SuiviBienEtre::class)->findAll();

        return $this->render('suivi_bien_etre/show.html.twig', [
            'suivis' => $suivis,
        ]);
    }

    #[Route('/add/{idObjectif}', name: 'app_suivi_add', requirements: ['idObjectif' => '\d+'], defaults: ['idObjectif' => null])]
    public function add(Request $request, EntityManagerInterface $em, ?int $idObjectif = null): Response
    {
        $suivi = new SuiviBienEtre();
        $suivi->setDateSaisie(new \DateTime());

        if ($idObjectif) {
            $objectif = $em->getRepository(ObjectifSante::class)->find($idObjectif);
            if ($objectif) {
                $suivi->setObjectif($objectif);
            }
        }

        $form = $this->createForm(SuiviBienEtreType::class, $suivi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $suivi->setScore($suivi->calculerScore());

            $em->persist($suivi);
            $em->flush();

            $this->addFlash('success', 'Suivi ajouté avec succès.');
            return $this->redirectToRoute('app_suivi_bien_etre_index');
        }

        return $this->render('suivi_bien_etre/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/edit/{id}', name: 'app_suivi_edit')]
    public function edit(Request $request, SuiviBienEtre $suivi, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(SuiviBienEtreType::class, $suivi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $suivi->setScore($suivi->calculerScore());
            $em->flush();

            $this->addFlash('success', 'Suivi modifié avec succès.');
            return $this->redirectToRoute('app_suivi_bien_etre_index');
        }

        return $this->render('suivi_bien_etre/edit.html.twig', [
            'form' => $form->createView(),
            'suivi' => $suivi,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_suivi_delete', methods: ['POST'])]
    public function delete(Request $request, SuiviBienEtre $suivi, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$suivi->getId(), $request->request->get('_token'))) {
            $em->remove($suivi);
            $em->flush();
            $this->addFlash('success', 'Suivi supprimé.');
        }

        return $this->redirectToRoute('app_suivi_bien_etre_index');
    }
    #[Route('/list', name: 'app_suivi_list_ajax', methods: ['GET'])]
public function listAjax(Request $request, EntityManagerInterface $em): JsonResponse
{
    $sort = strtoupper($request->query->get('sort', 'DESC'));
    if (!in_array($sort, ['ASC', 'DESC'], true)) {
        $sort = 'DESC';
    }

    $suivis = $em->getRepository(SuiviBienEtre::class)->findBy([], ['dateSaisie' => $sort]);

    $html = $this->renderView('suivi_bien_etre/_rows.html.twig', [
        'suivis' => $suivis
    ]);

    return new JsonResponse(['html' => $html]);
}
#[Route('/objectif/{idObjectif}/rows', name: 'app_suivi_rows_by_objectif', methods: ['GET'])]
public function rowsByObjectif(int $idObjectif, Request $request, EntityManagerInterface $em): JsonResponse
{
    $sort = strtoupper($request->query->get('sort', 'DESC'));
    if (!in_array($sort, ['ASC', 'DESC'], true)) {
        $sort = 'DESC';
    }

    $suivis = $em->getRepository(SuiviBienEtre::class)->findBy(
        ['objectif' => $idObjectif],
        ['dateSaisie' => $sort]
    );

    $html = $this->renderView('suivi_bien_etre/_rows_by_objectif.html.twig', [
        'suivis' => $suivis
    ]);

    return new JsonResponse(['html' => $html]);
}

}
