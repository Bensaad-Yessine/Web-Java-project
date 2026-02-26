<?php

namespace App\Service;

use App\Entity\Classe;
use App\Repository\QuizAttemptDetailRepository;
use App\Repository\QuizAttemptRepository;

class QuizStatsService
{
    public function __construct(
        private QuizAttemptRepository $attemptRepository,
        private QuizAttemptDetailRepository $detailRepository,
    ) {
    }

    /**
     * Stats pour une matière précise.
     */
    public function getStatsForMatiere(\App\Entity\MatiereClasse $matiere): array
    {
        $attempts = $this->attemptRepository->findBy(['matiere' => $matiere]);
        $count = count($attempts);

        if ($count === 0) {
            return [
                'matiereName' => $matiere->getNom() ?? 'Matière',
                'attempts' => 0,
                'averagePercent' => 0.0,
                'passRate' => 0.0,
            ];
        }

        $sumPercent = 0.0;
        $passCount = 0;

        foreach ($attempts as $attempt) {
            $sumPercent += $attempt->getPercent();
            if ($attempt->getPercent() >= 50.0) {
                $passCount++;
            }
        }

        $average = $sumPercent / $count;
        $passRate = $count > 0 ? ($passCount / $count) * 100.0 : 0.0;

        return [
            'matiereName' => $matiere->getNom() ?? 'Matière',
            'attempts' => $count,
            'averagePercent' => round($average, 1),
            'passRate' => round($passRate, 1),
        ];
    }

    /**
     * Retourne la performance des quiz par matière pour une classe.
     *
     * @return array<int, array{
     *   matiereName: string,
     *   attempts: int,
     *   averagePercent: float,
     *   passRate: float
     * }>
     */
    public function getMatierePerformanceForClasse(Classe $classe): array
    {
        $result = [];

        foreach ($classe->getMatiereClasses() as $matiere) {
            $attempts = $this->attemptRepository->findBy(['matiere' => $matiere]);
            $count = count($attempts);

            if ($count === 0) {
                $result[] = [
                    'matiereName' => $matiere->getNom() ?? 'Matière',
                    'attempts' => 0,
                    'averagePercent' => 0.0,
                    'passRate' => 0.0,
                ];
                continue;
            }

            $sumPercent = 0.0;
            $passCount = 0;

            foreach ($attempts as $attempt) {
                $sumPercent += $attempt->getPercent();
                if ($attempt->getPercent() >= 50.0) {
                    $passCount++;
                }
            }

            $average = $sumPercent / $count;
            $passRate = $count > 0 ? ($passCount / $count) * 100.0 : 0.0;

            $result[] = [
                'matiereName' => $matiere->getNom() ?? 'Matière',
                'attempts' => $count,
                'averagePercent' => round($average, 1),
                'passRate' => round($passRate, 1),
            ];
        }

        return $result;
    }

    /**
     * Retourne les questions les plus difficiles pour une classe (tous quiz confondus).
     *
     * @return array<int, array{
     *   question: string,
     *   matiereName: string,
     *   successRate: float,
     *   attempts: int
     * }>
     */
    public function getHardestQuestionsForClasse(Classe $classe, int $limit = 3): array
    {
        $details = $this->detailRepository->findAll();

        $stats = [];

        foreach ($details as $detail) {
            $question = $detail->getQuestion();
            $matiere = $question->getMatiere();

            // Si la question n'est pas liée à une matière, on ignore
            if (!$matiere) {
                continue;
            }

            // Nouvelle logique : MatiereClasse est liée à plusieurs classes (ManyToMany)
            // On garde uniquement les questions dont la matière appartient à la classe donnée
            if (!$matiere->getClasses()->contains($classe)) {
                continue;
            }

            $qid = $question->getId();
            if (!isset($stats[$qid])) {
                $stats[$qid] = [
                    'question' => $question->getQuestion(),
                    'matiereName' => $matiere->getNom() ?? 'Matière',
                    'attempts' => 0,
                    'correct' => 0,
                ];
            }

            $stats[$qid]['attempts']++;
            if ($detail->isCorrect()) {
                $stats[$qid]['correct']++;
            }
        }

        // Compute success rate and filter out questions without attempts
        $hardest = [];
        foreach ($stats as $row) {
            if ($row['attempts'] === 0) {
                continue;
            }
            $successRate = ($row['correct'] / $row['attempts']) * 100.0;
            $hardest[] = [
                'question' => $row['question'],
                'matiereName' => $row['matiereName'],
                'successRate' => round($successRate, 1),
                'attempts' => $row['attempts'],
            ];
        }

        // Sort by success rate ascending (hardest first)
        usort($hardest, static function (array $a, array $b): int {
            return $a['successRate'] <=> $b['successRate'];
        });

        return array_slice($hardest, 0, $limit);
    }

    /**
     * Questions les plus difficiles pour une matière donnée.
     *
     * @return array<int, array{
     *   question: string,
     *   matiereName: string,
     *   successRate: float,
     *   attempts: int
     * }>
     */
    public function getHardestQuestionsForMatiere(\App\Entity\MatiereClasse $matiere, int $limit = 3): array
    {
        $details = $this->detailRepository->findAll();

        $stats = [];

        foreach ($details as $detail) {
            $question = $detail->getQuestion();
            $matiereQuestion = $question->getMatiere();

            if ($matiereQuestion?->getId() !== $matiere->getId()) {
                continue;
            }

            $qid = $question->getId();
            if (!isset($stats[$qid])) {
                $stats[$qid] = [
                    'question' => $question->getQuestion(),
                    'matiereName' => $matiere->getNom() ?? 'Matière',
                    'attempts' => 0,
                    'correct' => 0,
                ];
            }

            $stats[$qid]['attempts']++;
            if ($detail->isCorrect()) {
                $stats[$qid]['correct']++;
            }
        }

        $hardest = [];
        foreach ($stats as $row) {
            if ($row['attempts'] === 0) {
                continue;
            }
            $successRate = ($row['correct'] / $row['attempts']) * 100.0;
            $hardest[] = [
                'question' => $row['question'],
                'matiereName' => $row['matiereName'],
                'successRate' => round($successRate, 1),
                'attempts' => $row['attempts'],
            ];
        }

        usort($hardest, static function (array $a, array $b): int {
            return $a['successRate'] <=> $b['successRate'];
        });

        return array_slice($hardest, 0, $limit);
    }
}
