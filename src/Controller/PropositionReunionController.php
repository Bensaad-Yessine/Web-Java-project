<?php

namespace App\Controller;

use App\Entity\PropositionReunion;
use App\Form\PropositionReunionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/proposition-reunion')]
class PropositionReunionController extends AbstractController
{
    #[Route('/new', name: 'proposition_reunion_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $proposition = new PropositionReunion();
        $proposition->setDateCreation(new \DateTime());

        $form = $this->createForm(PropositionReunionType::class, $proposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($proposition);
            $em->flush();

            $this->addFlash('success', 'Proposition de réunion créée avec succès !');

            return $this->redirectToRoute('proposition_reunion_list');
        }

        return $this->render('proposition_reunion/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/', name: 'proposition_reunion_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $propositions = $em->getRepository(PropositionReunion::class)->findAll();

        return $this->render('proposition_reunion/list.html.twig', [
            'propositions' => $propositions,
        ]);
    }
}
