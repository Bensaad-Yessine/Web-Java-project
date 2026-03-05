<?php

namespace App\Controller;

use App\Entity\ObjectifSante;
use App\Form\ObjectifSante2Type;
use App\Repository\ObjectifSanteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\CoachingSummaryService;
use App\Service\DashboardAnalyticsService;
use App\Repository\SuiviBienEtreRepository;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Command\ArchiveObjectifsCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use App\Service\PdfGeneratorService;
#[Route('/front/objectif/sante')]
final class FrontObjectifSanteController extends AbstractController
{
    #[Route('', name: 'front_objectif_sante_index', methods: ['GET'])]
    public function index(ObjectifSanteRepository $repo, ArchiveObjectifsCommand $cmd): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
          // ✅ Auto archive

    $cmd->run(new ArrayInput([]), new NullOutput());
        $user = $this->getUser();

        $objectifs = $repo->findBy(
    ['user' => $user, 'archivedAt' => null],
    ['dateDebut' => 'DESC']
);

        return $this->render('front/objectif_sante/index.html.twig', [
            'objectif_santes' => $objectifs,
        ]);
    }
    #[Route('/filter', name: 'front_objectif_sante_filter', methods: ['GET'])]
    public function filter(Request $request, ObjectifSanteRepository $repo): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();

        $q        = $request->query->get('q');
        $type     = $request->query->get('type');
        $priorite = $request->query->get('priorite');
        $statut   = $request->query->get('statut');
        $sortBy   = $request->query->get('sortBy', 'dateDebut');
        $sortDir  = $request->query->get('sortDir', 'DESC');

        $objectifs = $repo->searchFrontAjax($user, $q, $type, $priorite, $statut, $sortBy, $sortDir);

        return $this->render('front/objectif_sante/_rows.html.twig', [
            'objectif_santes' => $objectifs
        ]);
    }

    #[Route('/new', name: 'front_objectif_sante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();

        $objectif = new ObjectifSante();
        $objectif->setUser($user); // ✅ ربط بالـ user

        $form = $this->createForm(ObjectifSante2Type::class, $objectif, [
            'is_front' => true, // option اختيارية إذا بغيت
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($objectif);
            $em->flush();

            $this->addFlash('success', 'Objectif ajouté ✅');
            return $this->redirectToRoute('front_objectif_sante_index');
        }

        return $this->render('front/objectif_sante/new.html.twig', [
            'form' => $form,
            'objectif_sante' => $objectif,
        ]);
    }

    #[Route('/{id}/edit', name: 'front_objectif_sante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ObjectifSante $objectif, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        // ✅ ممنوع تعديل هدف ماشي ديالك
        if ($objectif->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(ObjectifSante2Type::class, $objectif, [
            'is_front' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Objectif modifié ✅');

            return $this->redirectToRoute('front_objectif_sante_index');
        }

        return $this->render('front/objectif_sante/edit.html.twig', [
            'form' => $form,
            'objectif_sante' => $objectif,
        ]);
    }

    #[Route('/{id}', name: 'front_objectif_sante_delete', methods: ['POST'])]
    public function delete(Request $request, ObjectifSante $objectif, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        if ($objectif->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete'.$objectif->getId(), $request->request->get('_token'))) {
            $em->remove($objectif);
            $em->flush();
            $this->addFlash('success', 'Objectif supprimé ✅');
        }

        return $this->redirectToRoute('front_objectif_sante_index');
    }
    
#[Route('/{id}/coaching-summary', name: 'front_objectif_coaching_summary', methods: ['GET'])]
public function coachingSummary(
    ObjectifSante $objectif,
    CoachingSummaryService $service
): JsonResponse {
    $this->denyAccessUnlessGranted('ROLE_USER');

    if ($objectif->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException();
    }

    return $this->json($service->build($objectif));
}
#[Route('/{id}/dashboard-analytics', name: 'front_objectif_dashboard_analytics', methods: ['GET'])]
public function dashboardAnalytics(
    ObjectifSante $objectif,
    DashboardAnalyticsService $service
): JsonResponse {
    $this->denyAccessUnlessGranted('ROLE_USER');

    if ($objectif->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException();
    }

    return $this->json($service->build($objectif));
}
#[Route('/archives', name: 'front_objectif_sante_archives', methods: ['GET'])]
public function archives(ObjectifSanteRepository $repo): Response
{
    $this->denyAccessUnlessGranted('ROLE_USER');
    $user = $this->getUser();

    $archived = $repo->createQueryBuilder('o')
        ->andWhere('o.user = :user')
        ->andWhere('o.archivedAt IS NOT NULL')
        ->setParameter('user', $user)
        ->orderBy('o.archivedAt', 'DESC')
        ->getQuery()
        ->getResult();

    return $this->render('front/objectif_sante/archives.html.twig', [
        'objectif_santes' => $archived,
    ]);
}
#[Route('/archives/{id}/pdf', name: 'front_objectif_archive_pdf', methods: ['GET'])]
public function archivePdf(
    ObjectifSante $objectif,
    SuiviBienEtreRepository $suiviRepo
): Response {
    $this->denyAccessUnlessGranted('ROLE_USER');

    if ($objectif->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException();
    }

    // ✅ لازم يكون Archived
    if ($objectif->getArchivedAt() === null) {
        throw $this->createNotFoundException('Objectif non archivé');
    }

    $suivis = $suiviRepo->findBy(['objectif' => $objectif], ['dateSaisie' => 'ASC']);

    // ✅ حساب بسيط للـ scorePercent (بدلو حسب منطقك)
    $lastScore = 0;
    if (!empty($suivis)) {
        $last = end($suivis);
        $lastScore = $last->getScore();
    }
    $scorePercent = round($lastScore * 10); // إذا score /10

    $html = $this->renderView('front/objectif_sante/objectif_archive.pdf.html.twig', [
        'objectif' => $objectif,
        'suivis' => $suivis,
        'scorePercent' => $scorePercent,
    ]);

    $options = new Options();
    $options->set('defaultFont', 'DejaVu Sans');

    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    return new Response(
        $dompdf->output(),
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="objectif_'.$objectif->getId().'.pdf"',
        ]
    );
}

#[Route('/{id}', name: 'front_objectif_sante_show', methods: ['GET'])]
public function show(
    ObjectifSante $objectif,
    SuiviBienEtreRepository $repo,
    DashboardAnalyticsService $analyticsService,
    ChartBuilderInterface $chartBuilder
): Response {
    $this->denyAccessUnlessGranted('ROLE_USER');

    if ($objectif->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException();
    }

    // 1) DATA series (Line)
    $suivis = $repo->findBy(['objectif' => $objectif], ['dateSaisie' => 'ASC']);
    $hasSuivis = !empty($suivis);
    
    $labels = [];
    $scores = [];
    foreach ($suivis as $s) {
        $labels[] = $s->getDateSaisie()->format('d/m');
        $scores[] = $s->getScore();
    }

    $scoreChart = null;
    $indicatorsChart = null;
    $moodChart = null;

    if ($hasSuivis) {
        $scoreChart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $scoreChart->setData([
            'labels' => $labels,
            'datasets' => [[
                'label' => 'Score',
                'data' => $scores,
                'tension' => 0.3,
                'borderColor' => 'rgb(59, 130, 246)',
                'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
            ]],
        ]);
        $scoreChart->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
        ]);

        // 2) ANALYTICS (Bar + Pie)
        $analytics = $analyticsService->build($objectif);

        $indicators = $analytics['indicatorsAvg'] ?? [
            'sommeil' => 0, 'energie' => 0, 'stress' => 0, 'alimentation' => 0
        ];

        $indicatorsChart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $indicatorsChart->setData([
            'labels' => ['Sommeil', 'Énergie', 'Stress', 'Alimentation'],
            'datasets' => [[
                'label' => 'Moyenne /10',
                'data' => [
                    $indicators['sommeil'] ?? 0,
                    $indicators['energie'] ?? 0,
                    $indicators['stress'] ?? 0,
                    $indicators['alimentation'] ?? 0,
                ],
                'backgroundColor' => [
                    'rgba(139, 92, 246, 0.8)',
                    'rgba(34, 197, 94, 0.8)',
                    'rgba(239, 68, 68, 0.8)',
                    'rgba(249, 115, 22, 0.8)',
                ],
            ]],
        ]);
        $indicatorsChart->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
        ]);

        $moods = $analytics['humeurDistribution'] ?? [];
        $moodLabels = array_map(fn($m) => $m['humeur'] ?? '—', $moods);
        $moodValues = array_map(fn($m) => $m['total'] ?? 0, $moods);

        if (!empty($moodLabels)) {
            $moodChart = $chartBuilder->createChart(Chart::TYPE_PIE);
            $moodChart->setData([
                'labels' => $moodLabels,
                'datasets' => [[
                    'data' => $moodValues,
                    'backgroundColor' => [
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(249, 115, 22, 0.8)',
                        'rgba(239, 68, 68, 0.8)',
                    ],
                ]],
            ]);
            $moodChart->setOptions([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ]);
        }
    }

    return $this->render('front/objectif_sante/show.html.twig', [
        'objectif_sante' => $objectif,
        'hasSuivis' => $hasSuivis,

        // charts (UX bundle)
        'scoreChart' => $scoreChart,
        'indicatorsChart' => $indicatorsChart,
        'moodChart' => $moodChart,
    ]);
}

#[Route('/share/pdf/{token}', name: 'share_pdf', methods: ['GET'])]
public function sharePdfByToken(
    string $token,
    ObjectifSanteRepository $repo,
    PdfGeneratorService $pdfService,
    SuiviBienEtreRepository $suiviRepo
): Response {
    $objectif = $repo->findOneBy(['shareToken' => $token]);

    if (!$objectif) {
        throw $this->createNotFoundException('Lien invalide');
    }

    if ($objectif->getShareExpiresAt() && $objectif->getShareExpiresAt() < new \DateTimeImmutable()) {
        throw $this->createNotFoundException('Lien expiré');
    }

    if (!$objectif->isArchived()) {
        throw $this->createNotFoundException('Objectif non archivé');
    }

    // récupérer les suivis
    $suivis = $suiviRepo->findBy(['objectif' => $objectif], ['dateSaisie' => 'ASC']);

    // scorePercent (comme tu fais déjà)
    $lastScore = 0;
    if (!empty($suivis)) {
        $last = end($suivis);
        $lastScore = $last->getScore() ?? 0;
    }
    $scorePercent = round($lastScore * 10);

    // Générer PDF et récupérer le path public (/archives_pdfs/xxx.pdf)
    $publicPath = $pdfService->generateObjectifPdf($objectif, $suivis, $scorePercent);

    // Convertir vers path physique
    $filePath = $this->getParameter('kernel.project_dir') . '/public' . $publicPath;

    if (!file_exists($filePath)) {
        throw $this->createNotFoundException('PDF introuvable');
    }

    return new Response(file_get_contents($filePath), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="objectif_'.$objectif->getId().'.pdf"',
    ]);
}


}

