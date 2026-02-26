<?php

namespace App\Command;

use App\Repository\ObjectifSanteRepository;
use App\Repository\SuiviBienEtreRepository;
use App\Service\PdfGeneratorService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Service\BrevoEmailService;



#[AsCommand(
    name: 'app:archive-objectifs',
    description: 'Archive les objectifs dépassés, met à jour le statut et génère un PDF'
)]
class ArchiveObjectifsCommand extends Command
{
    public function __construct(
        private ObjectifSanteRepository $repo,
        private EntityManagerInterface $em,
        private SuiviBienEtreRepository $suiviRepo,
        private PdfGeneratorService $pdf,
           private BrevoEmailService $brevo,
    
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $today = new \DateTimeImmutable('today');

        $objectifs = $this->repo->createQueryBuilder('o')
            ->andWhere('o.dateFin < :today')
            ->andWhere('o.archivedAt IS NULL')
            ->setParameter('today', $today)
            ->getQuery()
            ->getResult();

        $count = 0;

        foreach ($objectifs as $o) {

    $scorePercent = (float) ($o->getScoreMoyen() ?? 0.0);

    $o->setStatut($scorePercent < 70.0 ? 'ABANDONNE' : 'ATTEINT');
    $o->setArchivedAt(new \DateTimeImmutable());

    // ✅ 1) Récupérer suivis D’ABORD
    $suivis = $this->suiviRepo->findBy(
        ['objectif' => $o],
        ['dateSaisie' => 'ASC']
    );

    // ✅ 2) Générer PDF ensuite
    $pdfPath = $this->pdf->generateObjectifPdf($o, $suivis, $scorePercent);
    $o->setArchivePdfPath($pdfPath);

    /* ================================
       ENVOI EMAIL SIMPLE
    ================================ */

    $projectDir = dirname(__DIR__, 2);
    $filePath = $projectDir . '/public' . $pdfPath;

    if (!file_exists($filePath)) {
        $output->writeln("❌ PDF introuvable: " . $filePath);
        continue;
    }

    $pdfBinary = file_get_contents($filePath);
    $toEmail = $o->getUser()?->getEmail();

    if ($toEmail) {
        $html = "
          <h2>Votre objectif est archivé ✅</h2>
          <p>L'objectif <b>{$o->getTitre()}</b> est maintenant terminé.</p>
          <p>Le rapport complet est en pièce jointe.</p>
          <br>
          <p><b>Objectif Santé</b></p>
        ";

        try {
            $this->brevo->sendPdfWithQr(
                $toEmail,
                'Rapport objectif archivé',
                $html,
                $pdfBinary,
                'objectif_'.$o->getId().'.pdf'
            );
        } catch (\Throwable $e) {
            $output->writeln("❌ Erreur email pour {$toEmail}: " . $e->getMessage());
        }
    }

    $count++;
}
        $this->em->flush();

        $output->writeln("✅ Archivés + PDF: {$count}");
        return Command::SUCCESS;
    }
}