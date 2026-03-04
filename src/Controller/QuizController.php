<?php

namespace App\Controller;

use App\Entity\MatiereClasse;
use App\Entity\QuizAttempt;
use App\Entity\QuizAttemptDetail;
use App\Repository\QuizQuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/quiz')]
class QuizController extends AbstractController
{
    public function __construct(
        private QuizQuestionRepository $quizQuestionRepository,
        private EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('/matiere/{id}', name: 'app_quiz_matiere', methods: ['GET'])]
    public function start(MatiereClasse $matiere): Response
    {
        $questions = $this->quizQuestionRepository->findBy(['matiere' => $matiere]);

        if (empty($questions)) {
            $this->addFlash('warning', 'Aucune question disponible pour ce quiz.');
            $classe = $matiere->getClasses()->first();
            if ($classe) {
                return $this->redirectToRoute('app_classe_front_show', ['id' => $classe->getId()]);
            }
            return $this->redirectToRoute('app_user_index');
        }

        shuffle($questions);
        
        return $this->render('quiz/student_take.html.twig', [
            'matiere' => $matiere,
            'questions' => $questions,
        ]);
    }

    #[Route('/matiere/{id}/submit', name: 'app_quiz_submit', methods: ['POST'])]
    public function submit(Request $request, MatiereClasse $matiere): Response
    {
        $user = $this->getUser();
        $answers = $request->request->all('answers');
        
        if (empty($answers)) {
            $this->addFlash('error', 'Vous devez repondre a au moins une question.');
            return $this->redirectToRoute('app_quiz_matiere', ['id' => $matiere->getId()]);
        }

        $attempt = new QuizAttempt();
        $attempt->setUser($user);
        $attempt->setMatiere($matiere);
        $attempt->setCreatedAt(new \DateTimeImmutable());
        
        $totalQuestions = 0;
        $correctAnswers = 0;

        foreach ($answers as $questionId => $selectedAnswer) {
            $question = $this->quizQuestionRepository->find($questionId);
            
            if (!$question || $question->getMatiere()->getId() !== $matiere->getId()) {
                continue;
            }

            $totalQuestions++;
            $isCorrect = ($selectedAnswer === $question->getCorrectChoice());
            
            if ($isCorrect) {
                $correctAnswers++;
            }

            $detail = new QuizAttemptDetail();
            $detail->setAttempt($attempt);
            $detail->setQuestion($question);
            $detail->setUserAnswer($selectedAnswer);
            $detail->setCorrectAnswer($question->getCorrectChoice());
            $detail->setIsCorrect($isCorrect);
            
            $this->entityManager->persist($detail);
        }

        $scorePercent = $totalQuestions > 0 ? ($correctAnswers / $totalQuestions) * 100 : 0;
        $attempt->setCorrectCount($correctAnswers);
        $attempt->setTotalCount($totalQuestions);
        $attempt->setPercent($scorePercent);

        $this->entityManager->persist($attempt);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_quiz_results', ['id' => $attempt->getId()]);
    }

    #[Route('/attempt/{id}/results', name: 'app_quiz_results', methods: ['GET'])]
    public function results(QuizAttempt $attempt): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && $attempt->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $details = $this->entityManager->getRepository(QuizAttemptDetail::class)
            ->findBy(['attempt' => $attempt]);

        return $this->render('quiz/student_results.html.twig', [
            'attempt' => $attempt,
            'details' => $details,
        ]);
    }
}