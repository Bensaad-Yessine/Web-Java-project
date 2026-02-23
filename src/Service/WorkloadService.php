<?php

namespace App\Service;

use App\Entity\Classe;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class WorkloadService
{
    // Seuils configurables
    private const SEUIL_COMPLEXITE_TOTALE = 50;
    private const SEUIL_CHARGE_HORAIRE_TOTALE = 300; // heures par semestre
    private const SEUIL_COMPLEXITE_MOYENNE = 7;

    public function __construct(
        private MailerInterface $mailer,
        private string $adminEmail = 'admin@school.com'
    ) {}

    /**
     * Calcule la charge de travail totale pour une classe
     */
    public function calculateWorkload(Classe $classe): array
    {
        $matieres = $classe->getMatiereClasses();

        $totalComplexite = 0;
        $totalHeures = 0;
        $totalCoefficient = 0;
        $nbMatieres = count($matieres);
        $matieresDetails = [];

        foreach ($matieres as $matiere) {
            $score = $matiere->getScorecomplexite() ?? 0;
            $heures = $matiere->getChargehoraire() ?? 0;
            $coef = $matiere->getCoefficient() ?? 0;

            $totalComplexite += $score;
            $totalHeures += $heures;
            $totalCoefficient += $coef;

            $matieresDetails[] = [
                'nom' => $matiere->getNom(),
                'scorecomplexite' => $score,
                'chargehoraire' => $heures,
                'coefficient' => $coef,
            ];
        }

        $complexiteMoyenne = $nbMatieres > 0 ? round($totalComplexite / $nbMatieres, 2) : 0;

        return [
            'classe' => $classe->getNom(),
            'nbMatieres' => $nbMatieres,
            'totalComplexite' => $totalComplexite,
            'totalHeures' => $totalHeures,
            'totalCoefficient' => $totalCoefficient,
            'complexiteMoyenne' => $complexiteMoyenne,
            'matieres' => $matieresDetails,
            'surcharge' => $this->isSurcharge($totalComplexite, $totalHeures, $complexiteMoyenne),
            'seuilComplexite' => self::SEUIL_COMPLEXITE_TOTALE,
            'seuilHeures' => self::SEUIL_CHARGE_HORAIRE_TOTALE,
            'seuilComplexiteMoyenne' => self::SEUIL_COMPLEXITE_MOYENNE,
        ];
    }

    /**
     * Vérifie si la classe est surchargée
     */
    public function isSurcharge(int $totalComplexite, int $totalHeures, float $complexiteMoyenne): bool
    {
        return $totalComplexite > self::SEUIL_COMPLEXITE_TOTALE
            || $totalHeures > self::SEUIL_CHARGE_HORAIRE_TOTALE
            || $complexiteMoyenne > self::SEUIL_COMPLEXITE_MOYENNE;
    }

    /**
     * Analyse et envoie un mail si seuil dépassé
     */
    public function auditAndNotify(Classe $classe): array
    {
        $workload = $this->calculateWorkload($classe);

        if ($workload['surcharge']) {
            $this->sendAlertEmail($classe, $workload);
        }

        return $workload;
    }

    /**
     * Envoie un email d'alerte à l'administration
     */
    private function sendAlertEmail(Classe $classe, array $workload): void
    {
        $reasons = [];
        if ($workload['totalComplexite'] > self::SEUIL_COMPLEXITE_TOTALE) {
            $reasons[] = "Score de complexité total ({$workload['totalComplexite']}) > seuil (" . self::SEUIL_COMPLEXITE_TOTALE . ")";
        }
        if ($workload['totalHeures'] > self::SEUIL_CHARGE_HORAIRE_TOTALE) {
            $reasons[] = "Charge horaire totale ({$workload['totalHeures']}h) > seuil (" . self::SEUIL_CHARGE_HORAIRE_TOTALE . "h)";
        }
        if ($workload['complexiteMoyenne'] > self::SEUIL_COMPLEXITE_MOYENNE) {
            $reasons[] = "Complexité moyenne ({$workload['complexiteMoyenne']}) > seuil (" . self::SEUIL_COMPLEXITE_MOYENNE . ")";
        }

        $reasonsText = implode("\n• ", $reasons);

        $email = (new Email())
            ->from('noreply@school.com')
            ->to($this->adminEmail)
            ->subject("⚠️ Alerte Surcharge - Classe {$classe->getNom()}")
            ->html("
                <h2>⚠️ Alerte de Surcharge de Travail</h2>
                <p>La classe <strong>{$classe->getNom()}</strong> ({$classe->getNiveau()}) a dépassé les seuils de charge de travail acceptables.</p>
                
                <h3>📊 Résumé :</h3>
                <table border='1' cellpadding='8' style='border-collapse:collapse;'>
                    <tr><th>Indicateur</th><th>Valeur</th><th>Seuil</th><th>Statut</th></tr>
                    <tr>
                        <td>Complexité totale</td>
                        <td>{$workload['totalComplexite']}</td>
                        <td>" . self::SEUIL_COMPLEXITE_TOTALE . "</td>
                        <td>" . ($workload['totalComplexite'] > self::SEUIL_COMPLEXITE_TOTALE ? '🔴 Dépassé' : '✅ OK') . "</td>
                    </tr>
                    <tr>
                        <td>Charge horaire totale</td>
                        <td>{$workload['totalHeures']}h</td>
                        <td>" . self::SEUIL_CHARGE_HORAIRE_TOTALE . "h</td>
                        <td>" . ($workload['totalHeures'] > self::SEUIL_CHARGE_HORAIRE_TOTALE ? '🔴 Dépassé' : '✅ OK') . "</td>
                    </tr>
                    <tr>
                        <td>Complexité moyenne</td>
                        <td>{$workload['complexiteMoyenne']}</td>
                        <td>" . self::SEUIL_COMPLEXITE_MOYENNE . "</td>
                        <td>" . ($workload['complexiteMoyenne'] > self::SEUIL_COMPLEXITE_MOYENNE ? '🔴 Dépassé' : '✅ OK') . "</td>
                    </tr>
                </table>

                <h3>⚠️ Raisons :</h3>
                <ul><li>" . implode('</li><li>', $reasons) . "</li></ul>

                <h3>📚 Liste des matières ({$workload['nbMatieres']}) :</h3>
                <table border='1' cellpadding='8' style='border-collapse:collapse;'>
                    <tr><th>Matière</th><th>Complexité</th><th>Charge (h)</th><th>Coef.</th></tr>
            " . implode('', array_map(fn($m) => "
                    <tr>
                        <td>{$m['nom']}</td>
                        <td>{$m['scorecomplexite']}</td>
                        <td>{$m['chargehoraire']}</td>
                        <td>{$m['coefficient']}</td>
                    </tr>", $workload['matieres'])) . "
                </table>
                <p><small>Cet email a été généré automatiquement par le système de gestion scolaire.</small></p>
            ");

        try {
            $this->mailer->send($email);
        } catch (\Exception $e) {
            // Log silently if mail fails
        }
    }
}
