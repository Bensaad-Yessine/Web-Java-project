<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
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
    
        return $this->render('user/my_tasks.html.twig', [
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
}