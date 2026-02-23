<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\ClasseRepository;
use App\Repository\MatiereClasseRepository;
use App\Form\ClasseType;
use App\Service\WorkloadService;
use App\Service\ArchivingService;
use App\Service\ProgramGeneratorService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/classe')]
class ClasseController extends AbstractController
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

    // =========================
    // AJOUTER
    // =========================
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
            'form' => $form->createView()
        ]);
    }

    // =========================
    // AFFICHER
    // =========================
    #[Route('/{id}', name: 'app_classe_show', methods: ['GET'])]
    public function show(Classe $classe): Response
    {
        return $this->render('classe/show.html.twig', [
            'classe' => $classe
        ]);
    }

    // =========================
    // MODIFIER
    // =========================
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
            'form' => $form->createView()
        ]);
    }

    // =========================
    // SUPPRIMER
    // =========================
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

    // ==========================================================
    // ✅ FEATURE 1: AUDIT DE CHARGE DE TRAVAIL
    // ==========================================================

    /**
     * Affiche l'audit de charge de travail d'une classe.
     * GET /classe/{id}/audit
     */
    #[Route('/{id}/audit', name: 'app_classe_audit', methods: ['GET'])]
    public function audit(Classe $classe, WorkloadService $workloadService): Response
    {
        $workload = $workloadService->calculateWorkload($classe);

        return $this->render('classe/audit.html.twig', [
            'classe' => $classe,
            'workload' => $workload,
        ]);
    }

    /**
     * API : Retourne le JSON d'audit pour une classe.
     * GET /classe/{id}/audit/api
     */
    #[Route('/{id}/audit/api', name: 'app_classe_audit_api', methods: ['GET'])]
    public function auditApi(Classe $classe, WorkloadService $workloadService): JsonResponse
    {
        $workload = $workloadService->auditAndNotify($classe);
        return new JsonResponse($workload);
    }

    // ==========================================================
    // ✅ FEATURE 2: GÉNÉRATEUR DE PROGRAMME AUTOMATIQUE
    // ==========================================================

    /**
     * Affiche les suggestions de matières pour une classe.
     */
    #[Route('/{id}/suggestions', name: 'app_classe_suggestions', methods: ['GET', 'POST'])]
    public function suggestions(
        Request $request,
        Classe $classe,
        ProgramGeneratorService $generator,
        EntityManagerInterface $em
    ): Response {
        if ($request->isMethod('POST')) {
            $selectedIds = $request->request->all('selected_matieres');
            if (!empty($selectedIds)) {
                $generator->applySuggestions($classe, array_map('intval', $selectedIds));
                $em->flush();
                $this->addFlash('success', count($selectedIds) . ' matière(s) ajoutée(s) à la classe.');
            }
            return $this->redirectToRoute('app_classe_show', ['id' => $classe->getId()]);
        }

        $suggestions = $generator->getSuggestions($classe);

        return $this->render('classe/suggestions.html.twig', [
            'classe' => $classe,
            'suggestions' => $suggestions,
        ]);
    }

    // ==========================================================
    // ✅ FEATURE 3: ARCHIVAGE VERS NOUVELLE ANNÉE
    // ==========================================================

    /**
     * Clone une classe vers une nouvelle année universitaire.
     */
    #[Route('/{id}/archive', name: 'app_classe_archive', methods: ['GET', 'POST'])]
    public function archive(
        Request $request,
        Classe $classe,
        ArchivingService $archivingService
    ): Response {
        if ($request->isMethod('POST')) {
            $nouvelleAnnee = $request->request->get('nouvelle_annee');
            if (!$nouvelleAnnee) {
                $nouvelleAnnee = $archivingService->getNextYear($classe->getAnneeuniversitaire() ?? date('Y') . '/' . (date('Y')+1));
            }

            $clone = $archivingService->archiveAndClone($classe, $nouvelleAnnee);
            $this->addFlash('success', "Classe clonée vers l'année {$nouvelleAnnee} avec succès !");
            return $this->redirectToRoute('app_classe_show', ['id' => $clone->getId()]);
        }

        $nextYear = $archivingService->getNextYear(
            $classe->getAnneeuniversitaire() ?? date('Y') . '/' . (date('Y')+1)
        );

        return $this->render('classe/archive.html.twig', [
            'classe' => $classe,
            'nextYear' => $nextYear,
        ]);
    }

    // ==========================================================
    // ✅ FEATURE 4: STATISTIQUES / DISTRIBUTION
    // ==========================================================

    /**
     * API JSON : Distribution de complexité des matières d'une classe.
     * GET /classe/{id}/stats
     */
    #[Route('/{id}/stats', name: 'app_classe_stats', methods: ['GET'])]
    public function stats(Classe $classe): JsonResponse
    {
        $matieres = $classe->getMatiereClasses();
        $total = count($matieres);

        if ($total === 0) {
            return new JsonResponse(['classe' => $classe->getNom(), 'total' => 0, 'distribution' => []]);
        }

        $faible = 0;   // score 1-3
        $moyen = 0;    // score 4-6
        $eleve = 0;    // score 7-10

        $totalHeures = 0;
        $totalComplexite = 0;
        $totalCoefficient = 0;

        foreach ($matieres as $m) {
            $score = $m->getScorecomplexite() ?? 0;
            $totalHeures += $m->getChargehoraire() ?? 0;
            $totalComplexite += $score;
            $totalCoefficient += $m->getCoefficient() ?? 0;

            if ($score <= 3) $faible++;
            elseif ($score <= 6) $moyen++;
            else $eleve++;
        }

        return new JsonResponse([
            'classe' => $classe->getNom(),
            'niveau' => $classe->getNiveau(),
            'filiere' => $classe->getFiliere(),
            'annee' => $classe->getAnneeuniversitaire(),
            'total' => $total,
            'totalHeures' => $totalHeures,
            'totalComplexite' => $totalComplexite,
            'complexiteMoyenne' => round($totalComplexite / $total, 2),
            'totalCoefficient' => $totalCoefficient,
            'distribution' => [
                'faible' => ['count' => $faible, 'percent' => round($faible / $total * 100, 1)],
                'moyen'  => ['count' => $moyen,  'percent' => round($moyen  / $total * 100, 1)],
                'eleve'  => ['count' => $eleve,  'percent' => round($eleve  / $total * 100, 1)],
            ],
        ]);
    }

    // ==========================================================
    // ✅ FEATURE 5: EXPORT PDF / CSV
    // ==========================================================

    /**
     * Export CSV des matières d'une classe.
     * GET /classe/{id}/export/csv
     */
    #[Route('/{id}/export/csv', name: 'app_classe_export_csv', methods: ['GET'])]
    public function exportCsv(Classe $classe): Response
    {
        $matieres = $classe->getMatiereClasses();

        $csv = "Nom,Coefficient,Charge Horaire (h),Score Complexité,Description\n";
        foreach ($matieres as $m) {
            $csv .= sprintf(
                '"%s","%s","%s","%s","%s"' . "\n",
                str_replace('"', '""', $m->getNom() ?? ''),
                $m->getCoefficient() ?? 0,
                $m->getChargehoraire() ?? 0,
                $m->getScorecomplexite() ?? 0,
                str_replace('"', '""', $m->getDescription() ?? '')
            );
        }

        $filename = sprintf('classe_%s_%s.csv', 
            preg_replace('/[^a-z0-9]/i', '_', $classe->getNom()),
            date('Y-m-d')
        );

        return new Response($csv, 200, [
            'Content-Type' => 'text/csv; charset=utf-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ]);
    }

    /**
     * Export HTML (imprimable comme PDF) des matières d'une classe.
     * GET /classe/{id}/export/pdf
     */
    #[Route('/{id}/export/pdf', name: 'app_classe_export_pdf', methods: ['GET'])]
    public function exportPdf(Classe $classe): Response
    {
        return $this->render('classe/export_pdf.html.twig', [
            'classe' => $classe,
        ]);
    }
}
