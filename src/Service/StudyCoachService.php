<?php

namespace App\Service;

use App\Entity\Classe;

class StudyCoachService
{
    public function __construct(
        private QuizStatsService $quizStatsService,
    ) {
    }

    /**
     * Génère un plan de révision structuré pour une classe **sans appel à un LLM externe**.
     *
     * Logique "maison" (règle basée) :
     * - Priorise les matières avec forte complexité, charge horaire importante
     *   et/ou de mauvais résultats aux quiz.
     * - Propose un plan hebdomadaire d'environ 10 à 15 heures.
     * - Propose un ordre de révision basé sur les prérequis + complexité.
     *
     * Structure retournée typique :
     * [
     *   'status' => 'ok'|'error',
     *   'message' => string|null,
     *   'plan' => [
     *      'summary' => string,
     *      'week_focus' => array<array{
     *          matiere: string,
     *          recommended_hours: int,
     *          priority: int,
     *          topics: string[]
     *      }>,
     *      'ordering' => string[],
     *      'notes' => string|null,
     *   ]|null,
     * ]
     */
    public function generatePlan(Classe $classe): array
    {
        try {
            $matiereCollection = $classe->getMatiereClasses();

            if ($matiereCollection->isEmpty()) {
                return [
                    'status' => 'ok',
                    'message' => "Aucune matière n'est encore associée à cette classe.",
                    'plan' => null,
                ];
            }

            // 1) Récupérer les stats de quiz pour la classe
            $quizPerformance = $this->quizStatsService->getMatierePerformanceForClasse($classe);
            $quizByName = [];
            foreach ($quizPerformance as $row) {
                $name = $row['matiereName'] ?? 'Matière';
                $quizByName[$name] = $row;
            }

            // 2) Construire les données matières + calculer un score de priorité
            $matieres = [];
            $maxCharge = 0;

            // d'abord trouver la charge max pour normaliser
            foreach ($matiereCollection as $matiere) {
                $charge = $matiere->getChargehoraire() ?? 0;
                if ($charge > $maxCharge) {
                    $maxCharge = $charge;
                }
            }

            foreach ($matiereCollection as $matiere) {
                $nom = $matiere->getNom() ?? 'Matière';
                $charge = $matiere->getChargehoraire() ?? 0;
                $complexite = $matiere->getScorecomplexite() ?? 0;

                $prerequisNames = [];
                foreach ($matiere->getPrerequis() as $pre) {
                    $prerequisNames[] = $pre->getNom() ?? 'Pré-requis';
                }

                $quiz = $quizByName[$nom] ?? [
                    'matiereName' => $nom,
                    'attempts' => 0,
                    'averagePercent' => 0.0,
                    'passRate' => 0.0,
                ];

                // Pénalité / bonus selon la performance aux quiz
                $quizPenalty = 0.0;
                if ($quiz['attempts'] > 0) {
                    if ($quiz['averagePercent'] < 50.0) {
                        $quizPenalty += 3.0;   // matière en grande difficulté
                    } elseif ($quiz['averagePercent'] < 70.0) {
                        $quizPenalty += 2.0;   // matière à travailler
                    } elseif ($quiz['averagePercent'] < 85.0) {
                        $quizPenalty += 1.0;   // matière à consolider
                    }
                }

                // Poids lié à la charge horaire
                $workloadNorm = $maxCharge > 0 ? ($charge / $maxCharge) : 0.0; // 0 à 1

                // Score global de priorité (plus il est élevé, plus la matière est prioritaire)
                $priorityScore = $complexite + $quizPenalty + ($workloadNorm * 2.0);

                $matieres[] = [
                    'entity' => $matiere,
                    'nom' => $nom,
                    'coefficient' => $matiere->getCoefficient(),
                    'charge' => $charge,
                    'complexite' => $complexite,
                    'prerequis' => $prerequisNames,
                    'quiz' => $quiz,
                    'priority' => $priorityScore,
                ];
            }

            // 3) Sélectionner les matières "focus" de la semaine (top 3-4)
            usort($matieres, static function (array $a, array $b): int {
                return $b['priority'] <=> $a['priority'];
            });

            $focusCount = min(4, count($matieres));
            $selected = array_slice($matieres, 0, $focusCount);

            // Cible d'heures pour la semaine
            $targetHours = 12; // ~ entre 10 et 15

            $totalPriority = 0.0;
            foreach ($selected as $m) {
                $totalPriority += max(1.0, (float) $m['priority']);
            }
            if ($totalPriority <= 0.0) {
                $totalPriority = (float) $focusCount;
            }

            $weekFocus = [];
            $totalAssignedHours = 0;

            foreach ($selected as $index => $m) {
                $weight = max(1.0, (float) $m['priority']) / $totalPriority;
                $hours = (int) round($targetHours * $weight);
                if ($hours < 1) {
                    $hours = 1;
                }

                $totalAssignedHours += $hours;

                // Générer des thèmes/"topics" simples basés sur les prérequis et la difficulté
                $topics = [];
                if (!empty($m['prerequis'])) {
                    $topics[] = 'Réviser les prérequis : ' . implode(', ', $m['prerequis']);
                }

                if ($m['complexite'] >= 7) {
                    $topics[] = "Reprendre les notions avancées et les démonstrations importantes.";
                } else {
                    $topics[] = "Consolider les bases du cours et les exercices standards.";
                }

                if ($m['quiz']['attempts'] > 0 && $m['quiz']['averagePercent'] < 70.0) {
                    $topics[] = "Revoir les quiz avec un score < 70% et analyser les erreurs.";
                } else {
                    $topics[] = "Faire un quiz d'entraînement pour valider les acquis.";
                }

                $weekFocus[] = [
                    'matiere' => $m['nom'],
                    'recommended_hours' => $hours,
                    'priority' => $index + 1,
                    'topics' => $topics,
                ];
            }

            // 4) Proposer un ordre global des matières basé sur prérequis + complexité
            $orderingCandidates = $matieres;
            usort($orderingCandidates, static function (array $a, array $b): int {
                $preA = count($a['prerequis']);
                $preB = count($b['prerequis']);

                // D'abord, on met en avant les matières avec peu de prérequis
                if ($preA !== $preB) {
                    return $preA <=> $preB;
                }

                // À prérequis égaux, on commence par les moins complexes
                return $a['complexite'] <=> $b['complexite'];
            });

            $ordering = array_map(static function (array $m): string {
                return $m['nom'];
            }, $orderingCandidates);

            // 5) Résumé et notes
            $focusNames = array_map(static function (array $row): string {
                return $row['matiere'];
            }, $weekFocus);

            $summary = sprintf(
                'Cette semaine, concentre-toi sur %s pour environ %d heures de travail.',
                implode(', ', $focusNames),
                $totalAssignedHours
            );

            $notes = "Plan généré automatiquement à partir de la complexité des matières, de la charge horaire et de tes résultats aux quiz. Adapte-le selon ton rythme, tes projets et tes échéances d'examen.";

            return [
                'status' => 'ok',
                'message' => null,
                'plan' => [
                    'summary' => $summary,
                    'week_focus' => $weekFocus,
                    'ordering' => $ordering,
                    'notes' => $notes,
                ],
            ];
        } catch (\Throwable $e) {
            return [
                'status' => 'error',
                'message' => "Erreur lors de la génération du plan local : " . $e->getMessage(),
                'plan' => null,
            ];
        }
    }
}
