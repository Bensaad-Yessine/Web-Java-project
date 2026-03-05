<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class PdfGeneratorService
{
    private string $projectDir;

    public function __construct(
        private Environment $twig,
        ParameterBagInterface $params
    ) {
        // Symfony يمدّنا project dir من parameters
        $this->projectDir = $params->get('kernel.project_dir');
    }

    public function generateObjectifPdf(object $objectif, array $suivis, float $scorePercent): string
    {
        $html = $this->twig->render('front/objectif_sante/objectif_archive.pdf.html.twig', [
            'objectif' => $objectif,
            'suivis' => $suivis,
            'scorePercent' => round($scorePercent, 1),
        ]);

        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dir = $this->projectDir . '/public/archives_pdfs';
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $filename = 'objectif_' . $objectif->getId() . '_' . date('Ymd_His') . '.pdf';
        $fullPath = $dir . '/' . $filename;

        file_put_contents($fullPath, $dompdf->output());

        return '/archives_pdfs/' . $filename;
    }
}