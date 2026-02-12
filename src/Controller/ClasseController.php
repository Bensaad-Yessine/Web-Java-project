<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\ClasseType;
use App\Repository\ClasseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/classe')]
final class ClasseController extends AbstractController
{
    #[Route(name: 'app_classe_index', methods: ['GET'])]
    public function index(
        Request $request,
        ClasseRepository $classeRepository
    ): Response {
        $search = $request->query->get('search', '');
        $niveau = $request->query->get('niveau', '');
        $filiere = $request->query->get('filiere', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $classes = $classeRepository->findWithFilters(
            $search ?: null,
            $niveau ?: null,
            $filiere ?: null,
            $sort,
            $direction
        );

        $niveaux = $classeRepository->getDistinctNiveaux();
        $filieres = $classeRepository->getDistinctFilieres();

        return $this->render('classe/index.html.twig', [
            'classes' => $classes,
            'search' => $search,
            'niveau' => $niveau,
            'filiere' => $filiere,
            'sort' => $sort,
            'direction' => $direction,
            'niveaux' => $niveaux,
            'filieres' => $filieres,
        ]);
    }

    #[Route('/ajax/filter', name: 'app_classe_ajax_filter', methods: ['GET'])]
    public function ajaxFilter(
        Request $request,
        ClasseRepository $classeRepository,
        \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $search = $request->query->get('search', '');
        $niveau = $request->query->get('niveau', '');
        $filiere = $request->query->get('filiere', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $classes = $classeRepository->findWithFilters(
            $search ?: null,
            $niveau ?: null,
            $filiere ?: null,
            $sort,
            $direction
        );

        $data = [];
        foreach ($classes as $classe) {
            $data[] = [
                'id' => $classe->getId(),
                'nom' => $classe->getNom(),
                'niveau' => $classe->getNiveau(),
                'filiere' => $classe->getFiliere(),
                'anneeuniversitaire' => $classe->getAnneeuniversitaire(),
                'description' => $classe->getDescription(),
                'url' => $this->generateUrl('app_classe_show', ['id' => $classe->getId()]),
                'editUrl' => $this->generateUrl('app_classe_edit', ['id' => $classe->getId()]),
                'csrfToken' => $csrfTokenManager->getToken('delete' . $classe->getId())->getValue(),
            ];
        }

        return new JsonResponse([
            'success' => true,
            'count' => count($classes),
            'data' => $data,
        ]);
    }

    #[Route('/new', name: 'app_classe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $classe = new Classe();
        $form = $this->createForm(ClasseType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($classe);
            $entityManager->flush();
            
            $this->addFlash('success', 'Classe créée avec succès.');

            return $this->redirectToRoute('app_classe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('classe/new.html.twig', [
            'classe' => $classe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_classe_show', methods: ['GET'])]
    public function show(Classe $classe): Response
    {
        return $this->render('classe/show.html.twig', [
            'classe' => $classe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_classe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Classe $classe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClasseType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            $this->addFlash('success', 'Classe modifiée avec succès.');

            return $this->redirectToRoute('app_classe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('classe/edit.html.twig', [
            'classe' => $classe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_classe_delete', methods: ['POST'])]
    public function delete(Request $request, Classe $classe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$classe->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $entityManager->remove($classe);
                $entityManager->flush();
                $this->addFlash('success', 'Classe supprimée avec succès.');
            } catch (\Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException $e) {
                $this->addFlash('error', 'Impossible de supprimer cette classe car elle contient des éléments liés (ex: Étudiants, Séances).');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la suppression.');
            }
        } else {
            $this->addFlash('error', 'Token de sécurité invalide.');
        }

        return $this->redirectToRoute('app_classe_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/users', name: 'app_classe_users', methods: ['GET'])]
    public function users(Classe $classe, UserRepository $userRepository): Response
    {        $users = $userRepository->findUsersByClasse($classe);     
        return $this->render('classe/users.html.twig', [
            'classe' => $classe,
            'users' => $users,
        ]);
    }
}
