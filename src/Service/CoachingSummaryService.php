<?php

namespace App\Service;

use App\Entity\ObjectifSante;
use App\Repository\SuiviBienEtreRepository;

class CoachingSummaryService
{
    public function __construct(
        private SuiviBienEtreRepository $suiviRepo
    ) {}

    public function build(ObjectifSante $objectif): array
    {
        $scoreMoyen = (float) ($objectif->getScoreMoyen() ?? 0.0);

        $lastTwo = $this->suiviRepo->findLastTwoByObjectif($objectif->getId());
        $last = $lastTwo[0] ?? null;
        $prev = $lastTwo[1] ?? null;

        $lastScore = $last?->getScore();
        $prevScore = $prev?->getScore();

        // Cas: pas assez de données
        if (!$last) {
            return [
                "objectifId" => $objectif->getId(),
                "type" => $objectif->getType(),
                "scores" => [
                    "scoreMoyen" => round($scoreMoyen, 1),
                    "lastScore" => null,
                    "previousScore" => null,
                    "delta" => null
                ],
                "trend" => "STABLE",
                "message" => "Commence par ajouter ton premier suivi pour obtenir un coaching personnalisé.",
                "reasons" => ["Aucun suivi enregistré pour le moment."],
                "recommendations" => $this->baseRecommendations($objectif->getType()),
            ];
        }

        $delta = ($prevScore !== null && $lastScore !== null) ? round($lastScore - $prevScore, 1) : null;

        // Trend avancé : tolérance +/-2 et seuil “fort” +/-5
        $trend = $this->computeTrend($delta);

        // Message motivant avancé (trend + score moyen)
        $message = $this->buildMessage($trend, $scoreMoyen);

        // Raisons (justifications)
        $reasons = $this->buildReasons($trend, $delta, $scoreMoyen);

        // Recommandations avancées (2 à 4 max)
        $recommendations = $this->buildRecommendations($objectif->getType(), $last);

        return [
            "objectifId" => $objectif->getId(),
            "type" => $objectif->getType(),
            "scores" => [
                "scoreMoyen" => round($scoreMoyen, 1),
                "lastScore" => $lastScore !== null ? round($lastScore, 1) : null,
                "previousScore" => $prevScore !== null ? round($prevScore, 1) : null,
                "delta" => $delta
            ],
            "trend" => $trend,
            "message" => $message,
            "reasons" => $reasons,
            "recommendations" => $recommendations
        ];
    }

    private function computeTrend(?float $delta): string
    {
        if ($delta === null) return "STABLE";
        if ($delta >= 5) return "UP";
        if ($delta <= -5) return "DOWN";
        if ($delta > 2) return "UP";
        if ($delta < -2) return "DOWN";
        return "STABLE";
    }

private function buildMessage(string $trend, float $scoreMoyen): string
{
    // Niveau global
    $level =
        $scoreMoyen >= 75 ? "excellent" :
        ($scoreMoyen >= 60 ? "correct" :
        ($scoreMoyen >= 40 ? "moyen" : "faible"));

    // 🔴 حالة خاصة: إذا scoreMoyen أقل من 40
    if ($scoreMoyen < 40) {
        return "⚠️ Ton score moyen est faible (" . round($scoreMoyen, 1) . "/100). Tu es actuellement sur une mauvaise trajectoire, mais ce n’est pas définitif. Commence par améliorer un seul point (sommeil / énergie / stress / alimentation) et reste régulier : tu vas voir une vraie progression.";
    }

    // الحالات العادية
    return match($trend) {
        "UP" => "Bravo ! Tu progresses bien. Ton niveau global est $level — continue, tu es sur la bonne voie.",
        "DOWN" => "Petite baisse détectée, ce n’est pas grave. Ton niveau global est $level — fais un petit ajustement et tu vas remonter.",
        default => "Performance stable. Ton niveau global est $level — garde la régularité pour consolider tes résultats.",
    };
}

    private function buildReasons(string $trend, ?float $delta, float $scoreMoyen): array
    {
        $reasons = [];

        if ($delta !== null) {
            $sign = $delta > 0 ? "+" : "";
            $reasons[] = "Ton score a évolué de {$sign}{$delta} points par rapport au suivi précédent.";
        } else {
            $reasons[] = "Un seul suivi disponible, tendance basée sur ce suivi.";
        }

        $reasons[] = "Ton score moyen global est de " . round($scoreMoyen, 1) . ".";

        if ($trend === "DOWN" && $scoreMoyen < 50) {
            $reasons[] = "Ton niveau global est encore bas : l’objectif est de stabiliser avant d’augmenter.";
        }

        return $reasons;
    }

    private function buildRecommendations(string $type, $last): array
    {
        // On se base sur TON modèle (0-10)
        $sleep = (int) $last->getQualiteSommeil();
        $energy = (int) $last->getNiveauEnergie();
        $stress = (int) $last->getNiveauStress();
        $food = (int) $last->getQualiteAlimentation();

        // Règles “faibles” (tu peux ajuster seuils)
        $lowSleep = $sleep <= 4;
        $lowEnergy = $energy <= 4;
        $highStress = $stress >= 7;
        $lowFood = $food <= 4;

        // Recos candidates (on choisit 2 à 4)
        $candidates = [];

        // 1) Stress d’abord si haut (priorité haute)
        if ($highStress) {
            $candidates[] = [
                "title" => "Réduire le stress",
                "priority" => "HAUTE",
                "why" => "Ton stress est élevé (".$stress."/10).",
                "actions" => [
                    "Respiration 2 minutes (4-4-6) x 3 fois/jour",
                    "Pause 10 minutes sans écran",
                ]
            ];
        }

        // 2) Recos selon type objectif (priorité)
        if ($type === "SOMMEIL") {
            $candidates[] = [
                "title" => "Routine sommeil",
                "priority" => $lowSleep ? "HAUTE" : "MOYENNE",
                "why" => $lowSleep ? "Sommeil faible (".$sleep."/10)." : "Consolider ta progression.",
                "actions" => $lowSleep ? [
                    "Écran off 60 minutes avant dormir",
                    "Heure de coucher fixe 5 jours/7",
                    "Douche tiède ou lecture 10 minutes",
                ] : [
                    "Écran off 30–60 minutes avant dormir",
                    "Garder une heure de coucher régulière",
                ]
            ];
        }

        if ($type === "SPORT") {
            $candidates[] = [
                "title" => "Relancer l’énergie (sport)",
                "priority" => $lowEnergy ? "HAUTE" : "MOYENNE",
                "why" => $lowEnergy ? "Énergie faible (".$energy."/10)." : "Maintenir la dynamique.",
                "actions" => $lowEnergy ? [
                    "Séance légère 15–20 min (marche/étirements)",
                    "Hydratation + collation simple (banane/yaourt)",
                ] : [
                    "Planifier 3 séances courtes/semaine",
                    "Échauffement 5 minutes avant effort",
                ]
            ];
        }

        if ($type === "ALIMENTATION") {
            $candidates[] = [
                "title" => "Améliorer l’alimentation",
                "priority" => $lowFood ? "HAUTE" : "MOYENNE",
                "why" => $lowFood ? "Alimentation faible (".$food."/10)." : "Stabiliser les bonnes habitudes.",
                "actions" => $lowFood ? [
                    "Un repas simple équilibré (protéine + légumes + féculent)",
                    "Préparer 1 snack sain (fruit/noix) à l’avance",
                ] : [
                    "Ajouter 1 portion de légumes/jour",
                    "Boire 1.5L d’eau/jour",
                ]
            ];
        }

        // 3) Énergie / Sommeil si faibles, même si type différent (priorité moyenne)
        if ($lowEnergy && $type !== "SPORT") {
            $candidates[] = [
                "title" => "Récupération",
                "priority" => "MOYENNE",
                "why" => "Ton énergie est basse (".$energy."/10).",
                "actions" => [
                    "Micro-sieste 15 min (si possible)",
                    "Sortie 10 min à l’air libre",
                ]
            ];
        }

        if ($lowSleep && $type !== "SOMMEIL") {
            $candidates[] = [
                "title" => "Sommeil (support)",
                "priority" => "MOYENNE",
                "why" => "Sommeil bas (".$sleep."/10) impacte tout.",
                "actions" => [
                    "Écran off 45 min avant dormir",
                    "Limiter café après 16h",
                ]
            ];
        }

        // 4) Limiter à 2–4 recommandations max
        // On garde priorités HAUTE puis MOYENNE
        usort($candidates, function($a, $b) {
            $p = ["HAUTE" => 1, "MOYENNE" => 2, "BASSE" => 3];
            return ($p[$a["priority"]] ?? 9) <=> ($p[$b["priority"]] ?? 9);
        });

        return array_slice($candidates, 0, 4);
    }

    private function baseRecommendations(string $type): array
    {
        return [[
            "title" => "Commencer doucement",
            "priority" => "MOYENNE",
            "why" => "Ajoute 1 à 2 suivis pour générer un coaching précis.",
            "actions" => match($type) {
                "SOMMEIL" => ["Noter ton sommeil chaque jour", "Écran off 30 min avant dormir"],
                "SPORT" => ["Marche 10–15 min", "Boire de l’eau après effort"],
                "ALIMENTATION" => ["1 fruit/jour", "Limiter soda 1 jour sur 2"],
                default => ["Ajouter un suivi", "Rester régulier"]
            }
        ]];
    }
}
