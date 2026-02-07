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
    #[Route('/', name: 'app_user_index')]
    public function index(EntityManagerInterface $em): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $em->getRepository(User::class)->findAll(),
        ]);
    }

    // ✅ CREATE
    #[Route('/add', name: 'app_user_add')]
    public function add(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $hasher
    ): Response {
        $user = new User();

        $form = $this->createForm(UserType::class, $user, [
            'is_edit' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ✅ PASSWORD (required)
            $plainPassword = $form->get('plainPassword')->getData();
            if (!$plainPassword) {
                $this->addFlash('error', 'Mot de passe obligatoire');
                return $this->redirectToRoute('app_user_add');
            }

            $user->setPassword(
                $hasher->hashPassword($user, $plainPassword)
            );

            // ✅ DEFAULT ROLE (important)
            if (!$user->getRole()) {
                $user->setRole('student');
            }

            // ✅ PROFILE PIC (fixed setter name)
            $file = $form->get('profilePic')->getData();
            if ($file) {
                $name = uniqid().'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_directory'),
                    $name
                );
                $user->setProfilepic($name); // ✅ CORRECT
            }

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Utilisateur ajouté avec succès ✅');
            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // ✅ SHOW
    #[Route('/show/{id}', name: 'app_user_show')]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    // ✅ EDIT
    #[Route('/edit/{id}', name: 'app_user_edit')]
    public function edit(
        Request $request,
        User $user,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $hasher
    ): Response {
        $form = $this->createForm(UserType::class, $user, [
            'is_edit' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $user->setPassword(
                    $hasher->hashPassword($user, $plainPassword)
                );
            }

            $file = $form->get('profilePic')->getData();
            if ($file) {
                $name = uniqid().'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_directory'),
                    $name
                );
                $user->setProfilepic($name); // ✅ FIXED
            }

            $em->flush();

            $this->addFlash('success', 'Utilisateur modifié ✏️');
            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
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
        }

        return $this->redirectToRoute('app_user_index');
    }
}
