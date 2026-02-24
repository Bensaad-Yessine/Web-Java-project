<?php

namespace App\Controller;

use App\Entity\MatiereClasse;
use App\Entity\Classe;
use App\Form\MatiereClasseType;
use App\Repository\MatiereClasseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/matiere/classe')]
final class MatiereClasseController extends AbstractController
{
    #[Route(name: 'app_matiere_classe_index', methods: ['GET'])]
    public function index(
        Request $request,
        MatiereClasseRepository $matiereClasseRepository
    ): Response {
        $search = $request->query->get('search', '');
        $scoreMin = $request->query->get('scoreMin', '');
        $scoreMax = $request->query->get('scoreMax', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $matiereClasses = $matiereClasseRepository->findWithFilters(
            $search ?: null,
            null,
            $scoreMin ? (int) $scoreMin : null,
            $scoreMax ? (int) $scoreMax : null,
            $sort,
            $direction
        );

        $scoreRange = $matiereClasseRepository->getScoreComplexiteRange();

        return $this->render('matiere_classe/index.html.twig', [
            'matiere_classes' => $matiereClasses,
            'search' => $search,
            'scoreMin' => $scoreMin,
            'scoreMax' => $scoreMax,
            'sort' => $sort,
            'direction' => $direction,
            'minScore' => $scoreRange['min_score'] ?? 1,
            'maxScore' => $scoreRange['max_score'] ?? 10,
        ]);
    }

    #[Route('/ajax/filter', name: 'app_matiere_classe_ajax_filter', methods: ['GET'])]
    public function ajaxFilter(
        Request $request,
        MatiereClasseRepository $matiereClasseRepository,
        \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $search = $request->query->get('search', '');
        $scoreMin = $request->query->get('scoreMin', '');
        $scoreMax = $request->query->get('scoreMax', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $matiereClasses = $matiereClasseRepository->findWithFilters(
            $search ?: null,
            null,
            $scoreMin ? (int) $scoreMin : null,
            $scoreMax ? (int) $scoreMax : null,
            $sort,
            $direction
        );

        $data = [];
        foreach ($matiereClasses as $matiere) {
            $classes = [];
            foreach ($matiere->getClasses() as $classe) {
                $classes[] = $classe->getNom();
            }
            
            $data[] = [
                'id' => $matiere->getId(),
                'nom' => $matiere->getNom(),
                'description' => $matiere->getDescription(),
                'coefficient' => $matiere->getCoefficient(),
                'chargehoraire' => $matiere->getChargehoraire(),
                'scorecomplexite' => $matiere->getScorecomplexite(),
                'classes' => implode(', ', $classes),
                'url' => $this->generateUrl('app_matiere_classe_show', ['id' => $matiere->getId()]),
                'editUrl' => $this->generateUrl('app_matiere_classe_edit', ['id' => $matiere->getId()]),
                'csrfToken' => $csrfTokenManager->getToken('delete' . $matiere->getId())->getValue(),
            ];
        }

        return new JsonResponse([
            'success' => true,
            'count' => count($matiereClasses),
            'data' => $data,
        ]);
    }

    #[Route('/new', name: 'app_matiere_classe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $matiereClasse = new MatiereClasse();
        $form = $this->createForm(MatiereClasseType::class, $matiereClasse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($matiereClasse);
            $entityManager->flush();

            return $this->redirectToRoute('app_matiere_classe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matiere_classe/new.html.twig', [
            'matiere_classe' => $matiereClasse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matiere_classe_show', methods: ['GET'])]
    public function show(MatiereClasse $matiereClasse): Response
    {
        return $this->render('matiere_classe/show.html.twig', [
            'matiere_classe' => $matiereClasse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_matiere_classe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MatiereClasse $matiereClasse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MatiereClasseType::class, $matiereClasse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_matiere_classe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matiere_classe/edit.html.twig', [
            'matiere_classe' => $matiereClasse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matiere_classe_delete', methods: ['POST'])]
    public function delete(Request $request, MatiereClasse $matiereClasse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matiereClasse->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $entityManager->remove($matiereClasse);
                $entityManager->flush();
                $this->addFlash('success', 'Matière supprimée avec succès.');
            } catch (\Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException $e) {
                $this->addFlash('error', 'Impossible de supprimer cette matière car elle est liée à d\'autres éléments (ex: Séances). Veuillez supprimer les éléments liés d\'abord.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la suppression.');
            }
        }

        return $this->redirectToRoute('app_matiere_classe_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/classe/{id}/matieres', name: 'app_matiere_classe_by_classe')]
    public function byClasse(
        Classe $classe,
        Request $request,
        MatiereClasseRepository $matiereClasseRepository
    ): Response {
        $search = $request->query->get('search', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $matieresClasse = $matiereClasseRepository->findByClasseWithSearch(
            $classe,
            $search ?: null,
            $sort,
            $direction
        );

        return $this->render('matiere_classe/Classes.html.twig', [
            'classe' => $classe,
            'matieresClasse' => $matieresClasse,
            'search' => $search,
            'sort' => $sort,
            'direction' => $direction,
        ]);
    }

    #[Route('/classe/{id}/matieres/ajax', name: 'app_matiere_classe_by_classe_ajax', methods: ['GET'])]
    public function byClasseAjax(
        Classe $classe,
        Request $request,
        MatiereClasseRepository $matiereClasseRepository,
        \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $search = $request->query->get('search', '');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $matieresClasse = $matiereClasseRepository->findByClasseWithSearch(
            $classe,
            $search ?: null,
            $sort,
            $direction
        );

        $data = [];
        foreach ($matieresClasse as $matiere) {
            $data[] = [
                'id' => $matiere->getId(),
                'nom' => $matiere->getNom(),
                'description' => $matiere->getDescription(),
                'coefficient' => $matiere->getCoefficient(),
                'chargehoraire' => $matiere->getChargehoraire(),
                'scorecomplexite' => $matiere->getScorecomplexite(),
                'url' => $this->generateUrl('app_matiere_classe_show', ['id' => $matiere->getId()]),
                'editUrl' => $this->generateUrl('app_matiere_classe_edit', ['id' => $matiere->getId()]),
                'csrfToken' => $csrfTokenManager->getToken('delete' . $matiere->getId())->getValue(),
            ];
        }

        return new JsonResponse([
            'success' => true,
            'count' => count($matieresClasse),
            'data' => $data,
        ]);
    }
}
