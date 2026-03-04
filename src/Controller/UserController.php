<?php

namespace App\Controller;

use App\Service\TaskPredictorService;
use App\Repository\PreferenceAlerteRepository;
use App\Service\WeatherAIService;
use App\Service\StatisticsService;
use App\Service\AlertEngineService;
use App\Service\BehaviorAnalysisService;
use App\Entity\User;
use App\Entity\PreferenceAlerte;
use App\Entity\ObjectifSante;
use App\Form\UserType;
use App\Form\PreferencesOFAlertsType;
use App\Form\FrontOfficeTacheType;
use App\Repository\UserRepository;
use App\Repository\ObjectifSanteRepository;
use App\Repository\GroupeProjetRepository;
use App\Repository\SuiviBienEtreRepository;
use App\Entity\Tache;
use App\Repository\TacheRepository;
use App\Repository\StudentIntelligenceProfileRepository;
use App\Service\BanNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Json;   
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

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

    #[Route('/ajax/filter', name: 'app_user_ajax_filter', methods: ['GET'])]
    public function ajaxFilter(
        Request $request, 
        UserRepository $userRepository,
        CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $search = $request->query->get('q');
        $role = $request->query->get('role');
        $verifiedParam = $request->query->get('verified');
        $sort = $request->query->get('sortBy', 'id');
        $direction = $request->query->get('sortOrder', 'ASC');

        // Convert verified param to boolean or null
        $isVerified = null;
        if ($verifiedParam !== '' && $verifiedParam !== null) {
            $isVerified = $verifiedParam === '1';
        }

        $users = $userRepository->findWithFilters(
            $search, $role, $isVerified, $sort, $direction
        );

        // Transform users to array for JSON response
        $currentUser = $this->getUser();
        $currentUserId = $currentUser instanceof User ? $currentUser->getId() : null;
        
        // Helper function to ensure UTF-8 encoding
        $ensureUtf8 = function($value) {
            if ($value === null) {
                return null;
            }
            if (is_string($value)) {
                // Fix malformed UTF-8 characters
                $encoded = mb_convert_encoding($value, 'UTF-8', 'UTF-8');
                // Remove any remaining invalid UTF-8 sequences
                return mb_check_encoding($encoded, 'UTF-8') ? $encoded : utf8_encode($value);
            }
            return $value;
        };
        
        $usersData = [];
        foreach ($users as $user) {
            try {
                $usersData[] = [
                    'id' => $user->getId(),
                    'nom' => $ensureUtf8($user->getNom()),
                    'prenom' => $ensureUtf8($user->getPrenom()),
                    'email' => $ensureUtf8($user->getEmail()),
                    'dateDeNaissance' => $user->getDateDeNaissance() ? $user->getDateDeNaissance()->format('d/m/Y') : '—',
                    'classe' => $user->getClasse() ? $ensureUtf8($user->getClasse()->getNom()) : null,
                    'numTel' => $ensureUtf8($user->getNumTel()),
                    'sexe' => $ensureUtf8($user->getSexe()),
                    'roles' => $user->getRoles(),
                    'isAdmin' => in_array('ROLE_ADMIN', $user->getRoles()),
                    'isVerified' => $user->isVerified(),
                    'isBanned' => $user->isBanned(),
                    'banReason' => $ensureUtf8($user->getBanReason()),
                    'bannedAt' => $user->getBannedAt() ? $user->getBannedAt()->format('d/m/Y H:i') : null,
                    'profilePic' => $ensureUtf8($user->getProfilePic()),
                    'initials' => strtoupper(substr($user->getPrenom() ?? '', 0, 1) . substr($user->getNom() ?? '', 0, 1)),
                    'isCurrentUser' => $currentUserId && $user->getId() === $currentUserId,
                    'csrfToken' => $csrfTokenManager->getToken('delete' . $user->getId())->getValue(),
                ];
            } catch (\Exception $e) {
                // Log error but continue with other users
                error_log('Error processing user ' . $user->getId() . ': ' . $e->getMessage());
            }
        }

        return $this->json([
            'success' => true,
            'users' => $usersData,
            'count' => count($usersData)
        ], 200, [], ['json_encode_options' => \JSON_INVALID_UTF8_SUBSTITUTE]);
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

    #[Route('/{id}/ban', name: 'app_user_ban', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function ban(
        Request $request, 
        User $user, 
        EntityManagerInterface $em,
        BanNotificationService $banNotificationService
    ): JsonResponse {
        // Check if user is authorized (must be admin and not banning themselves)
        $currentUser = $this->getUser();
        if (!$currentUser || !in_array('ROLE_ADMIN', $currentUser->getRoles())) {
            return $this->json(['success' => false, 'message' => 'Accès non autorisé'], 403);
        }

        // Cast to User entity to access getId()
        if ($currentUser instanceof User && $user->getId() === $currentUser->getId()) {
            return $this->json(['success' => false, 'message' => 'Vous ne pouvez pas vous bannir vous-même'], 400);
        }

        try {
            $content = $request->getContent();
            $data = json_decode($content, true);
            
            $reason = $data['reason'] ?? 'Aucune raison spécifiée';

            $user->setIsBanned(true);
            $user->setBanReason($reason);
            $user->setBannedAt(new \DateTime('now'));
            
            $em->flush();

            // Send ban notification email (only if current user is User entity)
            if ($currentUser instanceof User) {
                $banNotificationService->sendBanNotification($user, $currentUser, $reason);
            }

            return $this->json([
                'success' => true,
                'message' => 'Utilisateur banni avec succès. Un email de notification a été envoyé.',
                'user' => [
                    'id' => $user->getId(),
                    'isBanned' => $user->isBanned(),
                    'bannedAt' => $user->getBannedAt()?->format('d/m/Y H:i'),
                    'banReason' => $user->getBanReason()
                ]
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors du bannissement: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id}/unban', name: 'app_user_unban', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function unban(
        Request $request, 
        User $user, 
        EntityManagerInterface $em,
        BanNotificationService $banNotificationService
    ): JsonResponse {
        // Check if user is authorized (must be admin)
        $currentUser = $this->getUser();
        if (!$currentUser || !in_array('ROLE_ADMIN', $currentUser->getRoles())) {
            return $this->json(['success' => false, 'message' => 'Accès non autorisé'], 403);
        }

        try {
            $user->setIsBanned(false);
            $user->setBanReason(null);
            $user->setBannedAt(null);
            
            $em->flush();

            // Send unban notification email (only if current user is User entity)
            if ($currentUser instanceof User) {
                $banNotificationService->sendUnbanNotification($user, $currentUser);
            }

            return $this->json([
                'success' => true,
                'message' => 'Utilisateur débanni avec succès. Un email de notification a été envoyé.',
                'user' => [
                    'id' => $user->getId(),
                    'isBanned' => $user->isBanned()
                ]
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors du débannissement: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/ajax/ban-status', name: 'app_user_ajax_ban_status', methods: ['GET'])]
    public function ajaxBanStatus(UserRepository $userRepository): JsonResponse
    {
        $banned = $userRepository->findBy(['isBanned' => true]);
        
        $bannedData = [];
        foreach ($banned as $user) {
            $bannedData[] = [
                'id' => $user->getId(),
                'name' => $user->getPrenom() . ' ' . $user->getNom(),
                'email' => $user->getEmail(),
                'bannedAt' => $user->getBannedAt()?->format('d/m/Y H:i'),
                'banReason' => $user->getBanReason()
            ];
        }

        return $this->json([
            'success' => true,
            'bannedUsers' => $bannedData,
            'count' => count($bannedData)
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard', methods: ['GET'])]
    public function dashboard(
        TacheRepository $tacheRepository,
        ObjectifSanteRepository $objectifSanteRepository,
        SuiviBienEtreRepository $suiviBienEtreRepository,
        GroupeProjetRepository $groupeProjetRepository,
        PreferenceAlerteRepository $preferenceAlerteRepository
    ): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder au tableau de bord.');
        }

        // Get all user tasks
        $tasks = $tacheRepository->findBy(
            ['user' => $user],
            ['id' => 'DESC']
        );

        // Get all user health objectives
        $objectifsSante = $objectifSanteRepository->findBy(['user' => $user]);

        // Get all user wellbeing tracking (through their objectives)
        $suiviBienEtre = [];
        foreach ($objectifsSante as $objectif) {
            $suivis = $suiviBienEtreRepository->findBy(['objectif' => $objectif]);
            $suiviBienEtre = array_merge($suiviBienEtre, $suivis);
        }

        // Get all user project groups
        $groupesProjets = $groupeProjetRepository->findByMember($user);

        // Get all user alert preferences
        $preferenceAlertes = $preferenceAlerteRepository->findBy(['etudiant' => $user]);

        // Calculate statistics
        $stats = [
            'tasks' => [
                'total' => count($tasks),
                'completed' => count(array_filter($tasks, fn($t) => $t->getStatut() === 'TERMINE')),
                'pending' => count(array_filter($tasks, fn($t) => in_array($t->getStatut(), ['A_FAIRE', 'EN_COURS', 'EN_RETARD', 'PAUSED']))),
                'overdue' => count(array_filter($tasks, fn($t) => $t->getStatut() === 'EN_RETARD')),
                'highPriority' => count(array_filter($tasks, fn($t) => $t->getPriorite() === 'ELEVEE')),
            ],
            'objectifs_sante' => [
                'total' => count($objectifsSante),
                'active' => count(array_filter($objectifsSante, fn($o) => !$o->getDateFin() || $o->getDateFin() > new \DateTime())),
                'completed' => count(array_filter($objectifsSante, fn($o) => $o->getDateFin() && $o->getDateFin() <= new \DateTime())),
            ],
            'suivi_bien_etre' => [
                'total' => count($suiviBienEtre),
                'this_month' => count(array_filter($suiviBienEtre, fn($s) => $s->getDateSaisie() && $s->getDateSaisie()->format('m-Y') === (new \DateTime())->format('m-Y'))),
            ],
            'groupes_projets' => [
                'total' => count($groupesProjets),
                'active' => count(array_filter($groupesProjets, fn($g) => $g->getStatut() !== 'ARCHIVE')),
            ],
            'preferences_alertes' => [
                'total' => count($preferenceAlertes),
                'active' => count(array_filter($preferenceAlertes, fn($p) => $p->isActive())),
            ],
        ];

        return $this->render('user/FrontOffice.html.twig', [
            'tasks' => $tasks,
            'stats' => $stats,
            'objectifs_sante' => $objectifsSante,
            'groupes_projets' => $groupesProjets,
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

    #[Route('/dashboard/profile/picture-upload', name: 'app_profile_picture_upload', methods: ['POST'])]
    public function uploadProfilePicture(
        Request $request, 
        EntityManagerInterface $em, 
        SluggerInterface $slugger
    ): JsonResponse {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        try {
            $profilePicFile = $request->files->get('profilePic');
            
            if (!$profilePicFile) {
                return $this->json(['success' => false, 'message' => 'No file uploaded'], 400);
            }

            // Validate file size (5MB max)
            if ($profilePicFile->getSize() > 5 * 1024 * 1024) {
                return $this->json(['success' => false, 'message' => 'File size exceeds 5MB limit'], 400);
            }

            // Validate file type
            $allowedMimes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            if (!in_array($profilePicFile->getMimeType(), $allowedMimes)) {
                return $this->json(['success' => false, 'message' => 'Invalid file type. Allowed: JPG, PNG, GIF, WebP'], 400);
            }

            // Create unique filename
            $originalFilename = pathinfo($profilePicFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $profilePicFile->guessExtension();

            // Upload the file
            try {
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/profile_pics';
                
                // Create directory if it doesn't exist
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                $profilePicFile->move($uploadDir, $newFilename);
            } catch (FileException $e) {
                return $this->json(['success' => false, 'message' => 'Failed to upload file'], 500);
            }

            // Delete old profile picture if it exists
            if ($user->getProfilePic()) {
                $oldFile = $this->getParameter('kernel.project_dir') . '/public/uploads/profile_pics/' . $user->getProfilePic();
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            // Update user profile picture
            $user->setProfilePic($newFilename);
            $em->flush();

            return $this->json([
                'success' => true,
                'message' => 'Profile picture uploaded successfully!',
                'filename' => $newFilename,
                'url' => '/uploads/profile_pics/' . $newFilename
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error uploading profile picture: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/dashboard/profile/change-password', name: 'app_change_password', methods: ['POST'])]
    public function changePassword(
        Request $request, 
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher
    ): JsonResponse {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        try {
            $content = $request->getContent();
            $data = json_decode($content, true);

            if (!$data) {
                return $this->json(['success' => false, 'message' => 'Invalid JSON data'], 400);
            }

            $currentPassword = $data['currentPassword'] ?? '';
            $newPassword = $data['newPassword'] ?? '';

            // Validate current password
            if (!$passwordHasher->isPasswordValid($user, $currentPassword)) {
                return $this->json(['success' => false, 'message' => 'Current password is incorrect'], 401);
            }

            // Validate new password
            if (empty($newPassword) || strlen($newPassword) < 8) {
                return $this->json(['success' => false, 'message' => 'New password must be at least 8 characters'], 400);
            }

            // Check if new password is same as current
            if ($passwordHasher->isPasswordValid($user, $newPassword)) {
                return $this->json(['success' => false, 'message' => 'New password must be different from current password'], 400);
            }

            // Validate password strength
            $strength = $this->validatePasswordStrength($newPassword);
            if ($strength < 3) {
                return $this->json([
                    'success' => false, 
                    'message' => 'Password is too weak. Use uppercase letters, numbers, and special characters'
                ], 400);
            }

            // Hash and update password
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);
            
            $em->flush();

            return $this->json([
                'success' => true,
                'message' => 'Password changed successfully!'
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error changing password: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Validate password strength
     * Returns number of criteria met (0-5)
     */
    private function validatePasswordStrength(string $password): int {
        $strength = 0;
        
        if (strlen($password) >= 8) $strength++;
        if (strlen($password) >= 12) $strength++;
        if (preg_match('/[A-Z]/', $password)) $strength++;
        if (preg_match('/[a-z]/', $password)) $strength++;
        if (preg_match('/[0-9]/', $password)) $strength++;
        if (preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) $strength++;
        
        return min($strength, 6);
    }

#[Route('/dashboard/task/add', name: 'app_task_add', methods: ['GET', 'POST'])]
    public function addTask(Request $request, EntityManagerInterface $em, TaskPredictorService $predictor): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException();
        }

        $tache = new Tache();
        $tache->setUser($user);

        $form = $this->createForm(FrontOfficeTacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // --------------------------
            // Map frontend values to entity values
            // --------------------------
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
                'pending'     => 'A_FAIRE',
                'in_progress' => 'EN_COURS',
                'completed'   => 'TERMINEE',
                'abandon'     => 'ABANDON'   // new status added
            ];

            $tache->setType($typeMap[$tache->getType()] ?? 'MANUEL');
            $tache->setPriorite($priorityMap[$tache->getPriorite()] ?? 'MOYEN');
            $tache->setStatut($statusMap[$tache->getStatut()] ?? 'A_FAIRE');

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

            // --------------------------
            // Persist task first to get ID
            // --------------------------
            $em->persist($tache);
            $em->flush();

            // --------------------------
            // Get completion probability from service
            // --------------------------
            $completionProbability = $predictor->predict($tache);
            $tache->setPrediction($completionProbability);

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

#[Route('/dashboard/task/{id}/show', name: 'app_task_show', methods: ['GET', 'POST'])]
public function showTask(Tache $tache): Response
{
    $user = $this->getUser();

    if (!$user || $tache->getUser() !== $user) {
        throw $this->createAccessDeniedException();
    }

    return $this->render('user/show_task.html.twig',['task'=>$tache]);
    }

    #[Route('/dashboard/task/{id}/delete', name: 'app_task_delete', methods: ['POST'])]
    public function deleteTask(Tache $tache, EntityManagerInterface $em, Request $request): Response
    {
        $user = $this->getUser();

        if (!$user || $tache->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        // Validate CSRF token
        if (!$this->isCsrfTokenValid('delete' . $tache->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Invalid CSRF token');
        }

        $em->remove($tache);
        $em->flush();

        $this->addFlash('success', 'Task deleted successfully!');
        return $this->redirectToRoute('app_my_tasks');
    }

    /**
        * Show preferences for the logged-in user
        */
    #[Route('/dashboard/FrontOffice/show/{id}', name: 'front_preference_alerte_show', methods: ['GET'])]
public function showPreferencesbyUser(PreferenceAlerteRepository $preferenceAlerteRepository, UserRepository $userRepository, int $id): Response
{   
    $preferenceAlerte = $preferenceAlerteRepository->findBy([
        'etudiant' => $this->getUser()
    ]);

    return $this->render('preference_alerte/showAlertFO.html.twig', [
        'preference_alertes' => $preferenceAlerte
    ]);
}
   #[Route('/dashboard/FrontOffice/edit/{id}', name: 'front_preference_alerte_edit', methods: ['GET', 'POST'])]
    public function editPreferencesbyUser(Request $request, PreferenceAlerteRepository $preferenceAlerteRepository, UserRepository $userRepository, int $id, EntityManagerInterface $entityManager): Response
    {
        $preferenceAlerte = $preferenceAlerteRepository->find($id);
        if (!$preferenceAlerte || $preferenceAlerte->getEtudiant()->getId() !== $this->getUser()->getId()) {
            throw $this->createNotFoundException('Préférence d\'alerte non trouvée ou accès non autorisé.');
        }

        $form = $this->createForm(PreferencesOFAlertsType::class, $preferenceAlerte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('front_preference_alerte_show', ['id' => $this->getUser()->getId()]);
        }

        return $this->render('preference_alerte/editAlertFO.html.twig', [
            'form' => $form,
            'preference_alerte' => $preferenceAlerte
        ]);
    }
    #[Route('/dashboard/FrontOffice/add/{id}', name: 'front_preference_alerte_add', methods: ['GET', 'POST'])]
    public function addPreferencesbyUser(Request $request, PreferenceAlerteRepository $preferenceAlerteRepository, UserRepository $userRepository, int $id, EntityManagerInterface $entityManager): Response
    {
        $preferenceAlerte = new PreferenceAlerte();
        $preferenceAlerte->setEtudiant($this->getUser());
        $form = $this->createForm(PreferencesOFAlertsType::class, $preferenceAlerte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Force template logic
            $preferenceAlerte->setIsDefault(false);
            $preferenceAlerte->setIsActive(true);

            $entityManager->persist($preferenceAlerte);
            $entityManager->flush();

            return $this->redirectToRoute('front_preference_alerte_show', ['id' => $this->getUser()->getId()]);
        }

        return $this->render('preference_alerte/addPreferencesAlertFO.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/dashboard/FrontOffice/detail/{userId}/{preferenceId}', name: "front_preference_alerte_detail", methods: ['GET'])]
    public function detail(
        int $userId, 
        int $preferenceId, 
        PreferenceAlerteRepository $preferenceRepository
    ): Response {
        // Vérifier que l'utilisateur est connecté
        $currentUser = $this->getUser();
        
        if (!$currentUser) {
            $this->addFlash('error', 'Vous devez être connecté pour accéder à cette page.');
            return $this->redirectToRoute('app_login');
        }

        // Vérifier que l'ID dans l'URL correspond à l'utilisateur connecté
        if ($currentUser->getId() !== $userId) 
            {
            $this->addFlash('error', 'Vous ne pouvez pas accéder aux préférences d\'un autre utilisateur.');
            return $this->redirectToRoute('front_preference_alerte_show', [
                'id' => $currentUser->getId()
            ]);
        }

        // Récupérer la préférence qui appartient à l'utilisateur connecté
        $preference = $preferenceRepository->findOneBy([
            'id' => $preferenceId,
            'etudiant' => $currentUser  // Note: c'est 'etudiant' et non 'user' d'après votre contrôleur
        ]);

        // Vérifier si la préférence existe
        if (!$preference) {
            $this->addFlash('error', 'Cette préférence d\'alerte n\'existe pas ou ne vous appartient pas.');
            return $this->redirectToRoute('front_preference_alerte_show', [
                'id' => $userId
            ]);
        }

        return $this->render('preference_alerte/showAlerteDetailFO.html.twig', [
            'preference' => $preference,
            'user' => $currentUser
        ]);
    }

    #[Route('/dashboard/preference/{id}/set-active', name: 'app_preference_set_active', methods: ['POST'])]
    public function setActive(
        int $id,
        PreferenceAlerteRepository $preferenceAlerteRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // 1. Get the preference to activate
        $preference = $preferenceAlerteRepository->find($id);
        if (!$preference) {
            throw $this->createNotFoundException('Preference not found');
        }

        $user = $preference->getEtudiant(); // Assuming Preference has a relation to User

        // 2. Set all preferences of this user to false
        $userPreferences = $preferenceAlerteRepository->findBy(['etudiant' => $user]);
        foreach ($userPreferences as $pref) {
            $pref->setIsActive(false);
        }

        // 3. Activate the selected preference
        $preference->setIsActive(true);

        // 4. Persist changes
        $entityManager->flush();

        // 5. Optional: redirect or return JSON
        return $this->redirectToRoute('front_preference_alerte_show', ['id' => $user->getId()]); 
    }
   #[Route('/dashboard/my-tasks', name: 'app_my_tasks', methods: ['GET'])]
public function myTasks(
    Request $request,
    TacheRepository $tacheRepository,
    StatisticsService $statsService,
    ChartBuilderInterface $chartBuilder,
    AlertEngineService $alertService
): Response {

    
    $user = $this->getUser();
    if (!$user) {
        throw $this->createAccessDeniedException();
    }

    $alertService->runForUser($user->getId());
    
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

    return $this->render('user/my_task.html.twig', [
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