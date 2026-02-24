<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\FrontOfficeTacheType;
use App\Repository\UserRepository;
use App\Entity\Tache;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Json;   
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\BehaviorAnalysisService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Service\StatisticsService;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use App\Service\WeatherAIService;


#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
            'current_user' => $this->getUser(),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher, SluggerInterface $slugger): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user, ['is_edit' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle profile picture upload
            $profilePicFile = $form->get('profilePicFile')->getData();
            if ($profilePicFile) {
                $originalFilename = pathinfo($profilePicFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$profilePicFile->guessExtension();

                try {
                    $profilePicFile->move(
                        $this->getParameter('profile_pics_directory'),
                        $newFilename
                    );
                    $user->setProfilePic($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de la photo de profil');
                }
            }

            // Hash the password
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            
            // Set default values
            $user->setIsVerified(false);
            
            // Ensure ROLE_USER is always present
            $roles = $user->getRoles();
            if (!in_array('ROLE_USER', $roles)) {
                $roles[] = 'ROLE_USER';
                $user->setRoles($roles);
            }

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Utilisateur créé avec succès !');

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(UserType::class, $user, ['is_edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle profile picture upload
            $profilePicFile = $form->get('profilePicFile')->getData();
            if ($profilePicFile) {
                // Delete old profile picture if exists
                if ($user->getProfilePic()) {
                    $oldFile = $this->getParameter('profile_pics_directory').'/'.$user->getProfilePic();
                    if (file_exists($oldFile)) {
                        unlink($oldFile);
                    }
                }

                $originalFilename = pathinfo($profilePicFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$profilePicFile->guessExtension();

                try {
                    $profilePicFile->move(
                        $this->getParameter('profile_pics_directory'),
                        $newFilename
                    );
                    $user->setProfilePic($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de la photo de profil');
                }
            }

            // Only update password if provided
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            }

            $em->flush();

            $this->addFlash('success', 'Utilisateur modifié avec succès !');

            return $this->redirectToRoute('app_user_show', ['id' => $user->getId()]);
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form,
            'user' => $user,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_user_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userName = $user->getNom() . ' ' . $user->getPrenom();
            
            // Delete profile picture if exists
            if ($user->getProfilePic()) {
                $profilePicPath = $this->getParameter('profile_pics_directory').'/'.$user->getProfilePic();
                if (file_exists($profilePicPath)) {
                    unlink($profilePicPath);
                }
            }
            
            $em->remove($user);
            $em->flush();

            $this->addFlash('success', "L'utilisateur {$userName} a été supprimé avec succès !");
        } else {
            $this->addFlash('error', 'Token CSRF invalide. L\'utilisateur n\'a pas été supprimé.');
        }

        return $this->redirectToRoute('app_user_index');
    }

    #[Route('/dashboard', name: 'app_dashboard', methods: ['GET'])]
    public function dashboard(TacheRepository $tacheRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('user/FrontOffice.html.twig', [
 'tasks' => $tacheRepository->findBy(
                ['user' => $this->getUser()],
                ['id' => 'DESC']
            ),        ]);
    }

#[Route('/dashboard/my-tasks', name: 'app_my_tasks', methods: ['GET'])]
public function myTasks(
    TacheRepository $tacheRepository,
    StatisticsService $statsService,
    ChartBuilderInterface $chartBuilder
): Response {
    $user = $this->getUser();
    if (!$user) {
        throw $this->createAccessDeniedException();
    }

    // Get tasks lists
    $activeStatuses = ['A_FAIRE', 'EN_COURS', 'EN_RETARD', 'PAUSED'];
    $archivedStatuses = ['TERMINE', 'ABANDON'];

    $activeTasks = $tacheRepository->findBy(
        ['user' => $user, 'statut' => $activeStatuses],
        ['id' => 'DESC']
    );

    $archivedTasks = $tacheRepository->findBy(
        ['user' => $user, 'statut' => $archivedStatuses],
        ['id' => 'DESC']
    );

    // Get all statistics
    $stats = $statsService->getUserStats($user);

    // ----- Chart 1: Status distribution -----
    $statusChart = $chartBuilder->createChart(Chart::TYPE_BAR);
    
    $todoTasks = $stats['counts']['total'] 
        - $stats['counts']['completed'] 
        - $stats['counts']['abandoned']
        - $stats['counts']['inProgress']
        - $stats['counts']['overdue']
        - $stats['counts']['paused'];
    
    $statusChart->setData([
        'labels' => ['À faire', 'En cours', 'Terminées', 'Abandonnées', 'En retard', 'En pause'],
        'datasets' => [
            [
                'label' => 'Tâches',
                'backgroundColor' => [
                    '#f59e0b',  // À faire
                    '#3b82f6',  // En cours
                    '#10b981',  // Terminées
                    '#ef4444',  // Abandonnées
                    '#d97706',  // En retard
                    '#6b7280'   // En pause
                ],
                'data' => [
                    $todoTasks,
                    $stats['counts']['inProgress'],
                    $stats['counts']['completed'],
                    $stats['counts']['abandoned'],
                    $stats['counts']['overdue'],
                    $stats['counts']['paused'],
                ],
            ],
        ],
    ]);

    // ----- Chart 2: Priority distribution -----
    $priorityChart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
    
    $highPriority = $stats['counts']['highPriority'] ?? 0;
    $remaining = max(0, $stats['counts']['total'] - $highPriority);
    $mediumPriority = (int)($remaining * 0.6);
    $lowPriority = $remaining - $mediumPriority;
    
    $priorityChart->setData([
        'labels' => ['Haute', 'Moyenne', 'Faible'],
        'datasets' => [
            [
                'label' => 'Priorité',
                'backgroundColor' => ['#ef4444', '#f59e0b', '#10b981'],
                'data' => [$highPriority, $mediumPriority, $lowPriority],
            ],
        ],
    ]);

    // ----- Chart 3: Progress over time (NEW) -----
    $progressChart = $chartBuilder->createChart(Chart::TYPE_LINE);

    // Get progress data for the last 30 days
    $progressData = $tacheRepository->getDailyTaskStats($user, 30);
    
    // Format dates for the chart
    $labels = [];
    $created = [];
    $completed = [];
    $abandoned = [];
    
    foreach ($progressData as $date => $data) {
        $dateObj = new \DateTime($date);
        $labels[] = $dateObj->format('d/m');
        $created[] = $data['created'];
        $completed[] = $data['completed'];
        $abandoned[] = $data['abandoned'];
    }
    
    $progressChart->setData([
        'labels' => $labels,
        'datasets' => [
            [
                'label' => 'Tâches créées',
                'data' => $created,
                'borderColor' => '#3b82f6',
                'backgroundColor' => '#3b82f620',
                'tension' => 0.4,
                'fill' => true
            ],
            [
                'label' => 'Tâches terminées',
                'data' => $completed,
                'borderColor' => '#10b981',
                'backgroundColor' => '#10b98120',
                'tension' => 0.4,
                'fill' => true
            ],
            [
                'label' => 'Tâches abandonnées',
                'data' => $abandoned,
                'borderColor' => '#ef4444',
                'backgroundColor' => '#ef444420',
                'tension' => 0.4,
                'fill' => true
            ]
        ],
    ]);

    return $this->render('user/FrontOffice.html.twig', [
        'activeTasks'     => $activeTasks,
        'archivedTasks'   => $archivedTasks,
        'stats'           => $stats,
        'statusChart'     => $statusChart,
        'priorityChart'   => $priorityChart,
        'progressChart'   => $progressChart,
        // Add these lines:
        'progressLabels'  => $labels,
        'progressCreated' => $created,
        'progressCompleted' => $completed,
        'progressAbandoned' => $abandoned,
    ]);
}

    #[Route('/dashboard/profile', name: 'app_profile', methods: ['GET'])]
    public function profile(): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw $this->createAccessDeniedException();
        }
    
        return $this->render('user/profile.html.twig');
    }

    #[Route('/dashboard/profile/update', name: 'app_profile_update', methods: ['POST'])]
    public function updateProfile(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        try {
            // Get data from request
            $content = $request->getContent();
            $data = json_decode($content, true);
            
            if (!$data) {
                return $this->json(['success' => false, 'message' => 'Invalid JSON data'], 400);
            }
            
            // Update email if provided
            if (isset($data['email']) && !empty($data['email'])) {
                $email = trim($data['email']);
                
                // Validate email format
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return $this->json(['success' => false, 'message' => 'Invalid email format'], 400);
                }
                
                $user->setEmail($email);
            }

            // Update phone if provided
            if (isset($data['phone'])) {
                $phone = trim($data['phone']);
                $user->setNumTel($phone ?: null);
            }

            // Update nom (last name) if provided
            if (isset($data['nom']) && !empty($data['nom'])) {
                $nom = trim($data['nom']);
                
                if (strlen($nom) < 2) {
                    return $this->json(['success' => false, 'message' => 'Last name must be at least 2 characters'], 400);
                }
                
                $user->setNom($nom);
            }

            // Update prenom (first name) if provided
            if (isset($data['prenom']) && !empty($data['prenom'])) {
                $prenom = trim($data['prenom']);
                
                if (strlen($prenom) < 2) {
                    return $this->json(['success' => false, 'message' => 'First name must be at least 2 characters'], 400);
                }
                
                $user->setPrenom($prenom);
            }

            // Flush changes to database
            $em->flush();
            
            return $this->json([
                'success' => true, 
                'message' => 'Profile updated successfully!',
                'user' => [
                    'nom' => $user->getNom(),
                    'prenom' => $user->getPrenom(),
                    'email' => $user->getEmail(),
                    'phone' => $user->getNumTel(),
                ]
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false, 
                'message' => 'Error updating profile: ' . $e->getMessage()
            ], 400);
        }
    }
    #[Route('/dashboard/task/add', name: 'app_task_add', methods: ['GET', 'POST'])]
    public function addTask(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw $this->createAccessDeniedException();
        }

        $tache = new Tache();
        $tache->setUser($user); // Automatically set current user
        
        $form = $this->createForm(FrontOfficeTacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Map frontend values to entity values
            $typeMap = [
                'course' => 'MANUEL',
                'exam' => 'REVISION',
                'meeting' => 'REUNION',
                'personal' => 'MANUEL',
                'project' => 'MANUEL',
                'assignment' => 'MANUEL'
            ];

            $priorityMap = [
                'low' => 'FAIBLE',
                'medium' => 'MOYEN',
                'high' => 'ELEVEE'
            ];

            $statusMap = [
                'pending' => 'A_FAIRE',
                'in_progress' => 'EN_COURS',
                'completed' => 'TERMINEE'
            ];

            // Map the values
            $formType = $tache->getType();
            $entityType = $typeMap[$formType] ?? 'MANUEL';
            $tache->setType($entityType);

            $formPriority = $tache->getPriorite();
            $entityPriority = $priorityMap[$formPriority] ?? 'MOYEN';
            $tache->setPriorite($entityPriority);

            $formStatus = $tache->getStatut();
            $entityStatus = $statusMap[$formStatus] ?? 'A_FAIRE';
            $tache->setStatut($entityStatus);

            // Ensure required fields are set
            if (!$tache->getDateDebut()) {
                $tache->setDateDebut(new \DateTime());
            }
            if (!$tache->getDateFin()) {
                $tache->setDateFin((new \DateTime())->modify('+1 hour'));
            }
            if (!$tache->getDureeEstimee()) {
                $tache->setDureeEstimee(60);
            }
            
            if (!$tache->getCreatedAt()) {
                $tache->setCreatedAt(new \DateTimeImmutable());
            }

            $em->persist($tache);
            $em->flush();

            $this->addFlash('success', 'Task created successfully!');
            return $this->redirectToRoute('app_my_tasks');
        }

        return $this->render('user/add_task.html.twig', [
            'form' => $form->createView(),
            'is_edit' => false,
        ]);
    }

    #[Route('/dashboard/task/{id}/edit', name: 'app_task_edit', methods: ['GET', 'POST'])]
    public function editTask(Request $request, Tache $tache, EntityManagerInterface $em): Response
    {
        // If legacy GET route, forward to dashboard edit logic
        if ($request->getMethod() === 'GET' && $request->get('_route') === 'legacy_task_edit') {
            return $this->redirectToRoute('app_task_edit', ['id' => $tache->getId()]);
        }
        $user = $this->getUser();
        
        if (!$user || $tache->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(FrontOfficeTacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tache->setUpdatedAt(new \DateTimeImmutable());

            // The form uses the entity's choice values (e.g. 'MANUEL','MOYEN','A_FAIRE'),
            // so no remapping is required here.
            $em->flush();

            $this->addFlash('success', 'Task updated successfully!');
            return $this->redirectToRoute('app_my_tasks');
        }

        return $this->render('user/edit_task.html.twig', [
            'form' => $form->createView(),
            'task' => $tache,
            'is_edit' => true,
        ]);
    }

    #[Route('/dashboard/task/{id}/show', name: 'app_task_show', methods: ['GET'])]
    public function showTask(Tache $tache): Response
    {
        $user = $this->getUser();

        if (!$user || $tache->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('user/show_task.html.twig', [
            'task' => $tache,
        ]);
    }


    #[Route('/dashboard/task/{id}/delete', name: 'app_task_delete', methods: ['POST'])]
    public function deleteTask(Request $request, Tache $tache, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        
        if (!$user || $tache->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete'.$tache->getId(), $request->request->get('_token'))) {
            $em->remove($tache);
            $em->flush();

            $this->addFlash('success', 'Task deleted successfully!');
        }

        return $this->redirectToRoute('app_my_tasks');
    }

    #[Route('/tasks/{id}/toggle', name: 'app_task_toggle', methods: ['POST'])]
    public function toggleTask(Request $request, Tache $tache, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        if (!$user || $tache->getUser() !== $user) {
            return $this->json(['success' => false, 'message' => 'Access denied'], 403);
        }

        $current = $tache->getStatut();
        if ($current === 'TERMINEE') {
            $tache->setStatut('A_FAIRE');
        } else {
            $tache->setStatut('TERMINEE');
        }

        $tache->setUpdatedAt(new \DateTimeImmutable());
        $em->flush();

        return $this->json([
            'success' => true,
            'statut' => $tache->getStatut(),
        ]);
    }
    
    #[Route('/dashboard/my-tasks/insights', name: 'user_tasks_insights', methods: ['GET'])]
    public function myTasksInsights(BehaviorAnalysisService $behaviorService): JsonResponse
    {
        $user = $this->getUser();

        try {
            $profile = $behaviorService->getOrComputeProfile($user);

            return new JsonResponse([
                'metrics' => [
                    'completionRate'           => $profile->getCompletionRate(),
                    'abandonmentRate'          => $profile->getAbandonmentRate(),
                    'averageStartDelayMinutes' => $profile->getAverageStartDelayMinutes(),
                    'pauseFrequency'           => $profile->getPauseFrequency(),
                    'mostProductiveHour'       => $profile->getMostProductiveHour(),
                    'mostProductiveDayOfWeek'  => $profile->getMostProductiveDayOfWeek(),
                ],
                'aiInsights' => [
                    'weeklyProductivitySummary' => $profile->getWeeklyProductivitySummary(),
                    'behavioralAdvice'          => $profile->getBehavioralAdvice(),
                ],
                'lastUpdated' => $profile->getAnalyzedAt()->format('Y-m-d H:i:s'),
            ]);

        } catch (\TypeError $e) {
            return new JsonResponse([
                'error_type' => 'TypeError',
                'message'    => $e->getMessage(),
                'file'       => $e->getFile() . ':' . $e->getLine(),
            ], 500);
        } catch (\Error $e) {
            return new JsonResponse([
                'error_type' => 'Error',
                'message'    => $e->getMessage(),
                'file'       => $e->getFile() . ':' . $e->getLine(),
            ], 500);
        } catch (\Exception $e) {
            return new JsonResponse([
                'error_type' => 'Exception',
                'message'    => $e->getMessage(),
                'file'       => $e->getFile() . ':' . $e->getLine(),
            ], 500);
        }
    }

    #[Route('/dashboard/weather-ai', name:'weather_ai')]
    public function weatherAI(
        WeatherAIService $service
    ): JsonResponse
    {

        $data = $service->getWeatherAndAdvice();

        return $this->json($data);

    }

    


}