<?php

namespace App\Controller;

use App\Entity\Seance;
use App\Entity\User;
use App\Entity\Classe;
use App\Form\SeanceType;
use App\Repository\SeanceRepository;
use App\Repository\ClasseRepository;
use App\Repository\SalleRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

#[Route('/seance')]
final class SeanceController extends AbstractController
{
    // =========================
    // INDEX
    // =========================
    #[Route('/', name: 'app_seance_index', methods: ['GET'])]
    public function index(Request $request, SeanceRepository $repo, SalleRepository $salleRepo): Response
    {
        $search = $request->query->get('search');
        $jour = $request->query->get('jour');
        $type = $request->query->get('type');
        $mode = $request->query->get('mode');
        $salleId = $request->query->get('salle');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $seances = $repo->findWithFilters(
            $search,
            $jour,
            $type,
            $mode,
            $salleId ? (int) $salleId : null,
            null,
            null,
            $sort,
            $direction
        );

        // list of salles for filter dropdown
        $salles = $salleRepo->findAll();

        return $this->render('seance/index.html.twig', [
            'seances' => $seances,
            'search' => $search,
            'jour' => $jour,
            'type' => $type,
            'mode' => $mode,
            'sort' => $sort,
            'direction' => $direction,
            'salles' => $salles,
            'salleFilter' => $salleId,
        ]);
    }

    #[Route('/ajax/filter', name: 'app_seance_ajax_filter', methods: ['GET'])]
    public function ajaxFilter(
        Request $request,
        SeanceRepository $repo,
        CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $search = $request->query->get('search');
        $jour = $request->query->get('jour');
        $type = $request->query->get('type');
        $mode = $request->query->get('mode');
        $salleId = $request->query->get('salle');
        $sort = $request->query->get('sort', 'id');
        $direction = $request->query->get('direction', 'asc');

        $seances = $repo->findWithFilters(
            $search,
            $jour,
            $type,
            $mode,
            $salleId ? (int) $salleId : null,
            null,
            null,
            $sort,
            $direction
        );

        $data = [];
        foreach ($seances as $seance) {
            $data[] = [
                'id' => $seance->getId(),
                'matiere' => $seance->getMatiere() ? $seance->getMatiere()->getNom() : 'N/A',
                'classe' => $seance->getClasse() ? $seance->getClasse()->getNom() : 'N/A',
                'salle' => $seance->getSalle() ? $seance->getSalle()->getName() : 'N/A',
                'jour' => $seance->getJour(),
                'typeSeance' => $seance->getTypeSeance(),
                'mode' => $seance->getMode(),
                'heureDebut' => $seance->getHeureDebut() ? $seance->getHeureDebut()->format('H:i') : '',
                'heureFin' => $seance->getHeureFin() ? $seance->getHeureFin()->format('H:i') : '',
                'url' => $this->generateUrl('app_seance_show', ['id' => $seance->getId()]),
                'editUrl' => $this->generateUrl('app_seance_edit', ['id' => $seance->getId()]),
                'csrfToken' => $csrfTokenManager->getToken('delete' . $seance->getId())->getValue(),
            ];
        }

        return new JsonResponse([
            'success' => true,
            'count' => count($seances),
            'data' => $data,
        ]);
    }

    // =========================
    // SHOW SEANCES BY CLASSE
    // IMPORTANT: placed BEFORE /{id}
    // =========================
    #[Route('/by-classe/{id<\d+>}', name: 'app_seance_by_classe', methods: ['GET'])]
    public function showSeanceByClasse(
        Request $request,
        SeanceRepository $seanceRepository,
        Classe $classe
    ): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // Calcul de la semaine affichée (offset en semaines par rapport à aujourd'hui)
        $weekOffset = (int) $request->query->get('week', 0);

        // Lundi de la semaine courante + offset
        $monday = new \DateTime();
        $monday->modify('monday this week');
        if ($weekOffset !== 0) {
            $monday->modify(($weekOffset > 0 ? '+' : '') . $weekOffset . ' weeks');
        }
        $saturday = (clone $monday)->modify('+5 days'); // Samedi

        // Jours FR → numéro ISO (Lundi=1 … Samedi=6)
        $joursMap = [
            'Lundi'    => 1,
            'Mardi'    => 2,
            'Mercredi' => 3,
            'Jeudi'    => 4,
            'Vendredi' => 5,
            'Samedi'   => 6,
        ];

        // Toutes les séances de la classe, filtrées par semaine via heureDebut
        $startWeek = (clone $monday)->setTime(0, 0, 0);
        $endWeek   = (clone $saturday)->setTime(23, 59, 59);

        // Séances avec date réelle dans la semaine uniquement (pas de fallback récurrent)
        $seancesWithDate = $seanceRepository->findByClasseAndWeek($classe, $startWeek, $endWeek);

        // Pour chaque jour de la semaine, calculer la date réelle
        $weekDays = [];
        for ($i = 0; $i < 6; $i++) {
            $day = (clone $monday)->modify("+$i days");
            $jourFr = array_search($i + 1, $joursMap);
            $weekDays[$jourFr] = $day->format('Y-m-d');
        }

        return $this->render('seance/schedule.html.twig', [
            'seances'         => $seancesWithDate,
            'seancesWithDate' => $seancesWithDate,
            'classe'          => $classe,
            'weekOffset'      => $weekOffset,
            'mondayDate'      => $monday->format('d/m/Y'),
            'saturdayDate'    => $saturday->format('d/m/Y'),
            'mondayISO'       => $monday->format('Y-m-d'),
            'weekDays'        => $weekDays,
        ]);
    }

    // =========================
    // NEW
    // =========================
    #[Route('/new', name: 'app_seance_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
        UserRepository $userRepository
    ): Response
    {
        $seance = new Seance();
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($seance);
            $entityManager->flush();

            $this->notifySeanceStudents($seance, $userRepository, $mailer, false);

            $this->addFlash('success', 'Séance créée avec succès.');

            return $this->redirectToRoute('app_seance_index');
        }

        return $this->render('seance/new.html.twig', [
            'seance' => $seance,
            'form' => $form->createView(),
        ]);
    }

    // =========================
    // SHOW ONE SEANCE
    // =========================
    #[Route('/{id<\d+>}', name: 'app_seance_show', methods: ['GET'])]
    public function show(Seance $seance): Response
    {
        return $this->render('seance/show.html.twig', [
            'seance' => $seance,
        ]);
    }

    // =========================
    // EDIT
    // =========================
    #[Route('/{id<\d+>}/edit', name: 'app_seance_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Seance $seance,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
        UserRepository $userRepository
    ): Response
    {
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            $this->notifySeanceStudents($seance, $userRepository, $mailer, true);

            $this->addFlash('success', 'Séance modifiée avec succès.');

            return $this->redirectToRoute('app_seance_index');
        }

        return $this->render('seance/edit.html.twig', [
            'seance' => $seance,
            'form' => $form->createView(),
        ]);
    }

    // =========================
    // DELETE
    // =========================
    #[Route('/{id<\d+>}', name: 'app_seance_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Seance $seance,
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid(
            'delete'.$seance->getId(),
            $request->request->get('_token')
        )) {
            $entityManager->remove($seance);
            $entityManager->flush();

            $this->addFlash('success', 'Séance supprimée.');
        }

        return $this->redirectToRoute('app_seance_index');
    }

    private function notifySeanceStudents(
        Seance $seance,
        UserRepository $userRepository,
        MailerInterface $mailer,
        bool $isUpdate
    ): void {
        $classe = $seance->getClasse();
        if (!$classe) {
            return;
        }

        $students = $userRepository->findBy(['classe' => $classe]);
        if (empty($students)) {
            return;
        }

        $matiere = $seance->getMatiere()?->getNom() ?? 'N/A';
        $jour = $seance->getJour() ?? 'N/A';
        $debut = $seance->getHeureDebut() ? $seance->getHeureDebut()->format('H:i') : 'N/A';
        $fin = $seance->getHeureFin() ? $seance->getHeureFin()->format('H:i') : 'N/A';
        $salle = $seance->getSalle()?->getName() ?? 'N/A';

        $subject = $isUpdate
            ? 'Seance modifiee - ' . $matiere
            : 'Nouvelle seance - ' . $matiere;

        $html = '<p>Bonjour,</p>'
            . '<p>' . ($isUpdate ? 'Une seance a ete modifiee' : 'Une nouvelle seance a ete ajoutee') . ' pour votre classe.</p>'
            . '<ul>'
            . '<li>Matiere: ' . $matiere . '</li>'
            . '<li>Jour: ' . $jour . '</li>'
            . '<li>Horaire: ' . $debut . ' - ' . $fin . '</li>'
            . '<li>Salle: ' . $salle . '</li>'
            . '</ul>'
            . '<p>Cordialement.</p>';

        $mailFrom = (string) $this->getParameter('mail_from');
        if ($mailFrom === '') {
            $mailFrom = 'no-reply@esprit.tn';
        }

        foreach ($students as $student) {
            if (!$student instanceof User) {
                continue;
            }
            if (in_array('ROLE_ADMIN', $student->getRoles(), true)) {
                continue;
            }
            $email = $student->getEmail();
            if (!$email) {
                continue;
            }

            try {
                $message = (new Email())
                    ->from($mailFrom)
                    ->to($email)
                    ->subject($subject)
                    ->html($html);
                $mailer->send($message);
            } catch (\Throwable $e) {
                // Ignore email errors to avoid blocking seance save.
            }
        }
    }
}
