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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Json;   
use Symfony\Component\HttpFoundation\JsonResponse;


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
            'tasks' => $tacheRepository->findTaskByUser($user),
        ]);
    }

    #[Route('/dashboard/my-tasks', name: 'app_my_tasks', methods: ['GET'])]
    public function myTasks(TacheRepository $tacheRepository): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw $this->createAccessDeniedException();
        }
    
        return $this->render('user/FrontOffice.html.twig', [
            'tasks' => $tacheRepository->findTaskByUser($user),
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
        if (!$tache->getOrigine()) {
            $tache->setOrigine('MANUEL');
        }
        if (!$tache->getCreatedAt()) {
            $tache->setCreatedAt(new \DateTime());
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
    $user = $this->getUser();
    
    if (!$user || $tache->getUser() !== $user) {
        throw $this->createAccessDeniedException();
    }

    // Store original values for mapping
    $originalType = $tache->getType();
    $originalPriority = $tache->getPriorite();
    $originalStatus = $tache->getStatut();

    // Map entity values to form values for display
    $typeReverseMap = [
        'MANUEL' => 'course',
        'REVISION' => 'exam',
        'REUNION' => 'meeting',
    ];

    $priorityReverseMap = [
        'FAIBLE' => 'low',
        'MOYEN' => 'medium',
        'ELEVEE' => 'high',
    ];

    $statusReverseMap = [
        'A_FAIRE' => 'pending',
        'EN_COURS' => 'in_progress',
        'TERMINEE' => 'completed',
    ];

    // Set form-friendly values
    $tache->setType($typeReverseMap[$originalType] ?? 'course');
    $tache->setPriorite($priorityReverseMap[$originalPriority] ?? 'medium');
    $tache->setStatut($statusReverseMap[$originalStatus] ?? 'pending');

    $form = $this->createForm(FrontOfficeTacheType::class, $tache);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Map form values back to entity values
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

        $tache->setType($typeMap[$tache->getType()] ?? 'MANUEL');
        $tache->setPriorite($priorityMap[$tache->getPriorite()] ?? 'MOYEN');
        $tache->setStatut($statusMap[$tache->getStatut()] ?? 'A_FAIRE');

        $em->flush();

        $this->addFlash('success', 'Task updated successfully!');
        return $this->redirectToRoute('app_my_tasks');
    }

    return $this->render('user/add_task.html.twig', [
        'form' => $form->createView(),
        'task' => $tache,
        'is_edit' => true,
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
}