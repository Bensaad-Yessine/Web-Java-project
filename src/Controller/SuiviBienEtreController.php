<?php

namespace App\Controller;

use App\Entity\SuiviBienEtre;
use App\Form\SuiviBienEtreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Attribute\Route;
use App\Entity\User;
use App\Repository\UserRepository;

#[Route('/suivi-bien-etre')]
final class SuiviBienEtreController extends AbstractController
{
    // ✅ READ ALL
    #[Route('/', name: 'app_suivi_bien_etre_index')]
    public function index(EntityManagerInterface $em): Response
    {
        $suivis = $em->getRepository(SuiviBienEtre::class)->findAll();

        return $this->render('suivi_bien_etre/index.html.twig', [
            'suivis' => $suivis,
        ]);
    }

    // ✅ CREATE
   // ✅ CREATE
#[Route('/add/{idUser}', name: 'app_suivi_bien_etre_add', requirements: ['idUser' => '\d+'])]
public function add(
    int $idUser,
    Request $request,
    EntityManagerInterface $em,
    UserRepository $userRepository
): Response
{
    

    $user = $userRepository->find($idUser);
    if (!$user) {
        throw $this->createNotFoundException('Utilisateur introuvable.');
    }

    $suivi = new SuiviBienEtre();
    $suivi->setUser($user); // ✅ fixe le user via l'id

    $form = $this->createForm(SuiviBienEtreType::class, $suivi);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $suivi->setScoreGlobalBienEtre($this->computeScoreGlobal($suivi));
        $em->persist($suivi);
        $em->flush();

        $this->addFlash('success', 'Suivi bien-être ajouté ✅');
        return $this->redirectToRoute('app_suivi_bien_etre_show_user', [
    'idUser' => $idUser
]);
    }

    return $this->render('suivi_bien_etre/add.html.twig', [
        'form' => $form->createView(),
        'idUser' => $idUser,
         'user' => $user,
    ]);
}

    // ✅ READ ONE
    #[Route('/{id}', name: 'app_suivi_bien_etre_show', requirements: ['id' => '\d+'])]
public function show(SuiviBienEtre $suivi): Response
{
    return $this->render('suivi_bien_etre/show.html.twig', [
        'suivi' => $suivi,
    ]);
}

    // ✅ UPDATE
    #[Route('/edit/{id}', name: 'app_suivi_bien_etre_edit', requirements: ['id' => '\d+'])]
    public function edit(Request $request, SuiviBienEtre $suivi, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(SuiviBienEtreType::class, $suivi);
        $form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $suivi->setScoreGlobalBienEtre($this->computeScoreGlobal($suivi));
    $em->flush();

    $this->addFlash('success', 'Suivi bien-être modifié ✏️');

    return $this->redirectToRoute('app_suivi_bien_etre_show_user', [
        'idUser' => $suivi->getUser()->getId()
    ]);
}


        return $this->render('suivi_bien_etre/edit.html.twig', [
            'form' => $form->createView(),
            'suivi' => $suivi,
        ]);
    }

    // ✅ DELETE
   #[Route('/delete/{id}', name: 'app_suivi_bien_etre_delete', methods: ['POST'], requirements: ['id' => '\d+'])]

    public function delete(Request $request, SuiviBienEtre $suivi, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$suivi->getId(), $request->request->get('_token'))) {
            $em->remove($suivi);
            $em->flush();

            $this->addFlash('success', 'Suivi bien-être supprimé 🗑️');
        }

        return $this->redirectToRoute('app_suivi_bien_etre_show_user', [
    'idUser' => $suivi->getUser()->getId()
]);
    }
    // ✅ SHOW suivis d'un user (liste par utilisateur)
#[Route('/user/{idUser}', name: 'app_suivi_bien_etre_show_user', requirements: ['idUser' => '\d+'])]
public function showUser(
    int $idUser,
    EntityManagerInterface $em,
    UserRepository $userRepository
): Response {
    $user = $userRepository->find($idUser);
    if (!$user) {
        throw $this->createNotFoundException('Utilisateur introuvable.');
    }

    $suivis = $em->getRepository(SuiviBienEtre::class)->findBy(
        ['user' => $user],
        ['id' => 'DESC']
    );

    return $this->render('suivi_bien_etre/show_user.html.twig', [
        'user' => $user,
        'suivis' => $suivis,
        'idUser' => $idUser,
    ]);
}

private function computeScoreGlobal(SuiviBienEtre $s): ?int
{
    $vals = [];

    // Ajoute ici les champs que tu veux utiliser dans le score
    if ($s->getQualiteSommeil() !== null) $vals[] = $s->getQualiteSommeil();
    if ($s->getNiveauEnergie() !== null) $vals[] = $s->getNiveauEnergie();
    if ($s->getNiveauStress() !== null) $vals[] = (10 - $s->getNiveauStress()); // stress inverse (plus stress = moins bien)
    if ($s->getQualiteAlimentation() !== null) $vals[] = $s->getQualiteAlimentation();
    if ($s->getNiveauAnxiete() !== null) $vals[] = (10 - $s->getNiveauAnxiete()); // anxiété inverse
    if ($s->getNiveauActivitePhysique() !== null) $vals[] = $s->getNiveauActivitePhysique();

    if (count($vals) === 0) return null;

    $avg = array_sum($vals) / count($vals);

    // score entier entre 0 et 10
    return (int) round(max(0, min(10, $avg)));
}

}
