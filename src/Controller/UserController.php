<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Tache;
use App\Entity\Classe;
use App\Entity\MatiereClasse;
use App\Form\UserType;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


#[Route('/user')]
final class UserController extends AbstractController
{
    // ✅ READ ALL
    #[Route('/', name: 'app_user_index')]
    public function index(EntityManagerInterface $em): Response
    {
        $users = $em->getRepository(User::class)->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }
    // ✅ CREATE
    #[Route('/add', name: 'app_user_add')]
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'User added successfully ✅');

            return $this->redirectToRoute('app_user_show');
        }

        return $this->render('user/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

    // ✅ READ ONE
    #[Route('/show', name: 'app_user_show')]
    public function show(EntityManagerInterface $em): Response
    {
        $users = $em->getRepository(User::class)->findAll();

       return $this->render('user/show.html.twig', [
        'users' => $users,
    ]);
    }

    // ✅ UPDATE
    #[Route('/edit/{id}', name: 'app_user_edit')]
    public function edit(
        Request $request,
        User $user,
        EntityManagerInterface $em
    ): Response {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'User updated successfully ✏️');

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    // ✅ DELETE
    #[Route('/delete/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        User $user,
        EntityManagerInterface $em
    ): Response {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $em->remove($user);
            $em->flush();

            $this->addFlash('success', 'User deleted 🗑️');
        }

        return $this->redirectToRoute('app_user_index');
    }

    // ✅ PROFILE
    #[Route('/profile', name: 'app_user_profile')]
    public function profile(TacheRepository $tacheRepo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $tasks = $tacheRepo->findTaskByUser($user);
        
        // Get user's classe and its matieres
        $classe = $user->getClasse();
        $matieres = [];
        if ($classe) {
            $matieres = $em->getRepository(MatiereClasse::class)->findBy(['classe' => $classe]);
        }
        
        // Get all classes for admin/listing
        $allClasses = $em->getRepository(Classe::class)->findAll();

        return $this->render('user/FrontOffice.html.twig', [
            'user' => $user,
            'tasks' => $tasks,
            'userClasse' => $classe,
            'matieres' => $matieres,
            'allClasses' => $allClasses,
        ]);
    }

    #[Route('/profile/update', name: 'app_profile_update', methods: ['POST'])]
    public function profileUpdate(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return new JsonResponse(['success' => false, 'message' => 'Unauthorized'], 401);
        }

        $data = json_decode($request->getContent(), true) ?? [];
        $fullName = isset($data['fullName']) ? trim($data['fullName']) : null;
        $email = $data['email'] ?? null;
        $phone = $data['phone'] ?? null;

        if ($fullName) {
            $parts = preg_split('/\s+/', $fullName);
            $prenom = array_shift($parts);
            $nom = count($parts) ? implode(' ', $parts) : '';
            $user->setPrenom($prenom);
            $user->setNom($nom);
        }

        if ($email) {
            $user->setEmail($email);
        }

        if ($phone) {
            $user->setNumTel($phone);
        }

        $em->persist($user);
        $em->flush();

        return new JsonResponse([
            'success' => true,
            'message' => 'Profile updated successfully',
            'user' => [
                'fullName' => trim($user->getPrenom() . ' ' . $user->getNom()),
                'email' => $user->getEmail(),
                'phone' => $user->getNumTel(),
            ],
        ]);
    }
}
