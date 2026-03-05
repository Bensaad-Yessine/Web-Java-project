<?php

namespace App\Controller;

use App\Entity\MatiereClasse;
use App\Entity\QuizQuestion;
use App\Form\QuizQuestionType;
use App\Repository\QuizAttemptRepository;
use App\Repository\QuizQuestionRepository;
use App\Service\QuizStatsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/quiz')]
#[IsGranted('ROLE_ADMIN')]
class QuizAdminController extends AbstractController
{
    public function __construct(
        private QuizQuestionRepository $quizQuestionRepository,
        private EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('/matiere/{id}', name: 'app_admin_quiz_matiere', methods: ['GET'])]
    public function index(MatiereClasse $matiere): Response
    {
        $questions = $this->quizQuestionRepository->findBy(['matiere' => $matiere]);

        return $this->render('quiz/admin_matiere.html.twig', [
            'matiere' => $matiere,
            'questions' => $questions,
        ]);
    }

    #[Route('/matiere/{id}/new', name: 'app_admin_quiz_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MatiereClasse $matiere): Response
    {
        $question = new QuizQuestion();
        $question->setMatiere($matiere);

        $form = $this->createForm(QuizQuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($question);
            $this->entityManager->flush();

            $this->addFlash('success', 'Question de quiz ajoutée.');

            return $this->redirectToRoute('app_admin_quiz_matiere', ['id' => $matiere->getId()]);
        }

        return $this->render('quiz/admin_form.html.twig', [
            'matiere' => $matiere,
            'form' => $form->createView(),
            'title' => 'Nouvelle question pour ' . $matiere->getNom(),
        ]);
    }

    #[Route('/question/{id}/edit', name: 'app_admin_quiz_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, QuizQuestion $question): Response
    {
        $form = $this->createForm(QuizQuestionType::class, $question);
        $form->handleRequest($request);
        $matiere = $question->getMatiere();

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Question mise à jour.');

            return $this->redirectToRoute('app_admin_quiz_matiere', ['id' => $matiere->getId()]);
        }

        return $this->render('quiz/admin_form.html.twig', [
            'matiere' => $matiere,
            'form' => $form->createView(),
            'title' => 'Modifier la question',
        ]);
    }

    #[Route('/question/{id}/delete', name: 'app_admin_quiz_delete', methods: ['POST'])]
    public function delete(Request $request, QuizQuestion $question): Response
    {
        $matiere = $question->getMatiere();

        if ($this->isCsrfTokenValid('delete_quiz_question_'.$question->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($question);
            $this->entityManager->flush();
            $this->addFlash('success', 'Question supprimée.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_admin_quiz_matiere', ['id' => $matiere->getId()]);
    }

    #[Route('/matiere/{id}/stats', name: 'app_admin_quiz_matiere_stats', methods: ['GET'])]
    public function stats(
        MatiereClasse $matiere,
        QuizAttemptRepository $attemptRepository,
        QuizStatsService $quizStatsService
    ): Response {
        $overview = $quizStatsService->getStatsForMatiere($matiere);
        $hardestQuestions = $quizStatsService->getHardestQuestionsForMatiere($matiere, 3);

        $attempts = $attemptRepository->findBy(
            ['matiere' => $matiere],
            ['createdAt' => 'DESC'],
            10
        );

        return $this->render('quiz/admin_matiere_stats.html.twig', [
            'matiere' => $matiere,
            'overview' => $overview,
            'hardestQuestions' => $hardestQuestions,
            'attempts' => $attempts,
        ]);
    }
}
