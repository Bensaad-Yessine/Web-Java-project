<?php

namespace App\Controller;

use App\Entity\GroupeProjet;
use App\Form\GroupeProjetType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/groupe-projet')]
class GroupeProjetController extends AbstractController
{
    #[Route('/new', name: 'groupe_projet_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $groupeProjet = new GroupeProjet();

        $form = $this->createForm(GroupeProjetType::class, $groupeProjet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($groupeProjet);
            $em->flush();

            $this->addFlash('success', 'GroupeProjet créé avec succès !');

            return $this->redirectToRoute('groupe_projet_list');
        }

        return $this->render('groupe_projet/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/', name: 'groupe_projet_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $groupes = $em->getRepository(GroupeProjet::class)->findAll();

        return $this->render('groupe_projet/list.html.twig', [
            'groupes' => $groupes,
        ]);
    }
}
