<?php

namespace App\Controller;

use App\Entity\MatiereClasse;
use App\Entity\QuizAttempt;
use App\Entity\QuizAttemptDetail;
use App\Entity\User;
use App\Repository\QuizQuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/quiz')]
class QuizController extends AbstractController
{
    public function __construct(private QuizQuestionRepository $quizQuestionRepository)
    {
    }

    /**
     * Quiz par matière (MatiereClasse)
     */
    #[Route('/matiere/{id}', name: 'app_quiz_matiere', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function quizForMatiere(Request $request, MatiereClasse $matiere, EntityManagerInterface $em): Response
    {
        $questions = $this->quizQuestionRepository->findBy(['matiere' => $matiere]);
        $score = null;
        $details = [];

        if ($request->isMethod('POST') && !empty($questions)) {
            $answers = $request->request->all('answers');
            $correctCount = 0;
            $attemptDetailsData = [];

            foreach ($questions as $q) {
                $id = (string) $q->getId();
                $userAnswer = $answers[$id] ?? null;
                $correct = $q->getCorrectChoice();
                $isCorrect = $userAnswer === $correct;

                if ($isCorrect) {
                    $correctCount++;
                }

                $details[] = [
                    'question' => $q->getQuestion(),
                    'user' => $userAnswer,
                    'correct' => $correct,
                    'is_correct' => $isCorrect,
                    'explanation' => $q->getExplanation(),
                ];

                $attemptDetailsData[] = [
                    'question' => $q,
                    'userAnswer' => $userAnswer,
                    'correct' => $correct,
                    'isCorrect' => $isCorrect,
                ];
            }

            $total = count($questions);
            $percent = $total > 0 ? round($correctCount / $total * 100) : 0;
            $score = [
                'correct' => $correctCount,
                'total' => $total,
                'percent' => $percent,
            ];

            // Persist the attempt and details for analytics
            $user = $this->getUser();
            if ($user instanceof User && $total > 0) {
                $attempt = (new QuizAttempt())
                    ->setUser($user)
                    ->setMatiere($matiere)
                    ->setCorrectCount($correctCount)
                    ->setTotalCount($total)
                    ->setPercent($percent);

                $em->persist($attempt);

                foreach ($attemptDetailsData as $row) {
                    $detail = (new QuizAttemptDetail())
                        ->setAttempt($attempt)
                        ->setQuestion($row['question'])
                        ->setUserAnswer($row['userAnswer'])
                        ->setCorrectAnswer($row['correct'])
                        ->setIsCorrect($row['isCorrect']);

                    $em->persist($detail);
                }

                $em->flush();
            }
        }

        return $this->render('quiz/matiere.html.twig', [
            'matiere' => $matiere,
            'questions' => $questions,
            'score' => $score,
            'details' => $details,
        ]);
    }
}

