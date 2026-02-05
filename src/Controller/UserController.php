<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

            return $this->redirectToRoute('app_user_show');
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }
 #[Route('/delete/{id}/confirm', name: 'app_user_delete_confirm', methods: ['GET'])]
    public function deleteConfirm(User $user): Response
    {
        return $this->render('user/delete.html.twig', [
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

        return $this->redirectToRoute('app_user_show');
    }

    // ✅ PROFILE
    #[Route('/profile', name: 'app_user_profile')]
    public function profile(): Response
    {
        return $this->render('user/profile.html.twig');
    }
}
