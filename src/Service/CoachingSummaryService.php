<?php

namespace App\Service;

use App\Entity\ObjectifSante;
use App\Repository\SuiviBienEtreRepository;
use App\Service\GroqClient;

class CoachingSummaryService
{
    public function __construct(
        private SuiviBienEtreRepository $suiviRepo,
        private GroqClient $groq
    ) {}

    public function build(ObjectifSante $objectif): array
    {
        $scoreMoyen = (float) ($objectif->getScoreMoyen() ?? 0.0);

        $lastTwo = $this->suiviRepo->findLastTwoByObjectif($objectif->getId());
        $last = $lastTwo[0] ?? null;
        $prev = $lastTwo[1] ?? null;

        $lastScore = $last?->getScore();
        $prevScore = $prev?->getScore();

        // ✅ Cas: pas assez de données
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

        $delta = ($prevScore !== null && $lastScore !== null)
            ? round((float)$lastScore - (float)$prevScore, 1)
            : null;

        $trend = $this->computeTrend($delta);

        // ✅ Stats envoyées au LLM
        $stats = [
            "objectifId" => $objectif->getId(),
            "objectifType" => $objectif->getType(),
            "scoreMoyen" => round($scoreMoyen, 1),
            "trend" => $trend,
            "delta" => $delta,
            "lastScore" => $lastScore !== null ? round((float)$lastScore, 1) : null,
            "previousScore" => $prevScore !== null ? round((float)$prevScore, 1) : null,
            "indicators" => [
                "sleep" => (int) $last->getQualiteSommeil(),
                "energy" => (int) $last->getNiveauEnergie(),
                "stress" => (int) $last->getNiveauStress(),
                "food" => (int) $last->getQualiteAlimentation(),
            ],
            "scale" => [
                "indicators" => "0-10",
                "globalScore" => "0-100",
            ],
        ];

        // ✅ AI FIRST (message + reasons + recommendations)
        try {
            $ai = $this->aiCoaching($stats);

            $message = is_string($ai["message"] ?? null) ? $ai["message"] : null;
            $reasons = is_array($ai["reasons"] ?? null) ? array_values(array_filter($ai["reasons"], "is_string")) : null;
            $recommendations = is_array($ai["recommendations"] ?? null) ? $this->normalizeRecommendations($ai["recommendations"]) : null;

            // Si réponse AI ناقصة -> fallback
            if (!$message || !$reasons || !$recommendations || count($recommendations) === 0) {
                throw new \RuntimeException("AI response invalid");
            }
        } catch (\Throwable $e) {
            // ✅ fallback (tes règles)
            $message = $this->buildMessage($trend, $scoreMoyen);
            $reasons = $this->buildReasons($trend, $delta, $scoreMoyen);
            $recommendations = $this->buildRecommendations($objectif->getType(), $last);
        }

        return [
            "objectifId" => $objectif->getId(),
            "type" => $objectif->getType(),
            "scores" => [
                "scoreMoyen" => round($scoreMoyen, 1),
                "lastScore" => $lastScore !== null ? round((float)$lastScore, 1) : null,
                "previousScore" => $prevScore !== null ? round((float)$prevScore, 1) : null,
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

    // ======= FALLBACK METHODS (règles) =======

    private function buildMessage(string $trend, float $scoreMoyen): string
    {
        $level =
            $scoreMoyen >= 75 ? "excellent" :
            ($scoreMoyen >= 60 ? "correct" :
            ($scoreMoyen >= 40 ? "moyen" : "faible"));

        if ($scoreMoyen < 40) {
            return "⚠️ Ton score moyen est faible (" . round($scoreMoyen, 1) . "/100). "
                . "Tu es sur une mauvaise trajectoire, mais ce n’est pas définitif. "
                . "Améliore un seul point (sommeil / énergie / stress / alimentation) et reste régulier.";
        }

        return match($trend) {
            "UP" => "Bravo ! Tu progresses bien. Ton niveau global est $level — continue, tu es sur la bonne voie.",
            "DOWN" => "Petite baisse détectée, ce n’est pas grave. Ton niveau global est $level — ajuste légèrement et tu vas remonter.",
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
            $reasons[] = "Ton niveau global est encore bas : stabilise d’abord avant d’augmenter.";
        }

        return $reasons;
    }

    private function buildRecommendations(string $type, $last): array
    {
        $sleep = (int) $last->getQualiteSommeil();
        $energy = (int) $last->getNiveauEnergie();
        $stress = (int) $last->getNiveauStress();
        $food = (int) $last->getQualiteAlimentation();

        $lowSleep = $sleep <= 4;
        $lowEnergy = $energy <= 4;
        $highStress = $stress >= 7;
        $lowFood = $food <= 4;

        $candidates = [];

        if ($highStress) {
            $candidates[] = [
                "title" => "Réduire le stress",
                "priority" => "HAUTE",
                "why" => "Ton stress est élevé ({$stress}/10).",
                "actions" => [
                    "Respiration 2 minutes (4-4-6) x 3 fois/jour",
                    "Pause 10 minutes sans écran",
                ]
            ];
        }

        if ($type === "SOMMEIL") {
            $candidates[] = [
                "title" => "Routine sommeil",
                "priority" => $lowSleep ? "HAUTE" : "MOYENNE",
                "why" => $lowSleep ? "Sommeil faible ({$sleep}/10)." : "Consolider ta progression.",
                "actions" => $lowSleep ? [
                    "Écran off 60 minutes avant dormir",
                    "Heure de coucher fixe 5 jours/7",
                    "Lecture 10 minutes",
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
                "why" => $lowEnergy ? "Énergie faible ({$energy}/10)." : "Maintenir la dynamique.",
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
                "why" => $lowFood ? "Alimentation faible ({$food}/10)." : "Stabiliser les bonnes habitudes.",
                "actions" => $lowFood ? [
                    "Repas simple équilibré (protéine + légumes + féculent)",
                    "Préparer 1 snack sain (fruit/noix) à l’avance",
                ] : [
                    "Ajouter 1 portion de légumes/jour",
                    "Boire 1.5L d’eau/jour",
                ]
            ];
        }

        if ($lowEnergy && $type !== "SPORT") {
            $candidates[] = [
                "title" => "Récupération",
                "priority" => "MOYENNE",
                "why" => "Ton énergie est basse ({$energy}/10).",
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
                "why" => "Sommeil bas ({$sleep}/10) impacte tout.",
                "actions" => [
                    "Écran off 45 min avant dormir",
                    "Limiter café après 16h",
                ]
            ];
        }

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

    // ======= AI METHODS =======

    private function aiCoaching(array $stats): array
    {
        $system = <<<SYS
Tu es un coach bien-être pour étudiants.
Réponds UNIQUEMENT en JSON valide (sans markdown).

Schéma JSON:
{
  "message": string,
  "reasons": string[],
  "recommendations": [
    {"title": string, "priority": "HAUTE"|"MOYENNE"|"BASSE", "why": string, "actions": string[]}
  ]
}

Règles:
- message: 1 à 2 phrases max
- reasons: 2 à 3 éléments
- 2 à 4 recommandations max
- 2 à 4 actions max par recommandation
- Conseils simples et concrets
- Pas de diagnostic médical, pas de médicaments
- Langue: Français
SYS;

        $user = "Voici les statistiques (indicateurs 0-10, score global 0-100). "
              . "Génère un coaching personnalisé en respectant le schéma.\n\n"
              . json_encode($stats, JSON_UNESCAPED_UNICODE);

        return $this->groq->chatJson([
            ["role" => "system", "content" => $system],
            ["role" => "user", "content" => $user],
        ], temperature: 0.4, maxTokens: 700);
    }

    private function normalizeRecommendations(array $recs): array
    {
        $out = [];

        foreach ($recs as $r) {
            if (!is_array($r)) continue;

            $title = isset($r["title"]) ? (string)$r["title"] : null;
            $priority = isset($r["priority"]) ? (string)$r["priority"] : "MOYENNE";
            $why = isset($r["why"]) ? (string)$r["why"] : "";
            $actions = isset($r["actions"]) && is_array($r["actions"]) ? $r["actions"] : [];

            if (!$title) continue;

            $priority = in_array($priority, ["HAUTE","MOYENNE","BASSE"], true) ? $priority : "MOYENNE";

            $actions = array_values(array_filter($actions, fn($a) => is_string($a) && trim($a) !== ""));
            $actions = array_slice($actions, 0, 4);

            $out[] = [
                "title" => $title,
                "priority" => $priority,
                "why" => $why,
                "actions" => $actions,
            ];

            if (count($out) >= 4) break;
        }

        return array_slice($out, 0, 4);
    }
}