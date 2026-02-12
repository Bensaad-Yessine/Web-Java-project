<?php

namespace App\Controller;

use App\Entity\PreferenceAlerte;
use App\Form\PreferenceAlerteType;
use App\Repository\PreferenceAlerteRepository;
use App\Form\PreferencesOFAlertsType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/preference/alerte')]
final class PreferenceAlerteController extends AbstractController
{
    #[Route(name: 'app_preference_alerte_index', methods: ['GET'])]
    public function index(Request $request, PreferenceAlerteRepository $preferenceAlerteRepository): Response
    {
        // Read filters from query. Accept both English and French param names used by templates.
        $title = $request->query->get('title') ?? $request->query->get('titre');
        $sort  = $request->query->get('sort');

        // statut (FR) or isActive (EN)
        $isActive = null;
        if ($request->query->has('isActive')) {
            $isActive = filter_var($request->query->get('isActive'), FILTER_VALIDATE_BOOL);
        } elseif ($request->query->has('statut')) {
            $val = $request->query->get('statut');
            if ($val === '1' || $val === '0') {
                $isActive = $val === '1';
            }
        }

        // isDefault may come as '1'/'0' or true/false
        $isDefault = null;
        if ($request->query->has('isDefault')) {
            $v = $request->query->get('isDefault');
            if ($v === '1' || $v === '0') {
                $isDefault = $v === '1';
            } else {
                $isDefault = filter_var($v, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE);
            }
        }

        $preferences = $preferenceAlerteRepository->searchAdmin($title, $sort, $isActive, $isDefault);

        // If this is an AJAX request, return only the rows partial (so the frontend can inject tbody HTML)
        if ($request->isXmlHttpRequest()) {
            return $this->render('preference_alerte/_rows.html.twig', [
                'preference_alertes' => $preferences,
            ]);
        }

        return $this->render('preference_alerte/index.html.twig', [
            'preference_alertes' => $preferences,
            'title' => $title,
            'sort' => $sort,
            'isActive' => $isActive,
            'isDefault' => $isDefault,
            'statut' => $isActive !== null ? ($isActive ? '1' : '0') : '',
        ]);
    }

    #[Route('/new', name: 'app_preference_alerte_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $preferenceAlerte = new PreferenceAlerte();
        $form = $this->createForm(PreferenceAlerteType::class, $preferenceAlerte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Force template logic
            $preferenceAlerte->setEtudiant(null);
            $preferenceAlerte->setIsDefault(true);
            $preferenceAlerte->setIsActive(false);

            $entityManager->persist($preferenceAlerte);
            $entityManager->flush();

            return $this->redirectToRoute('app_preference_alerte_index');
        }

        return $this->render('preference_alerte/new.html.twig', [
            'form' => $form,
        ]);
    }

/*
    #[Route('/new', name: 'app_preference_alerte_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $preferenceAlerte = new PreferenceAlerte();
        $form = $this->createForm(PreferenceAlerteType::class, $preferenceAlerte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($preferenceAlerte);
            $entityManager->flush();

            return $this->redirectToRoute('app_preference_alerte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('preference_alerte/new.html.twig', [
            'preference_alerte' => $preferenceAlerte,
            'form' => $form,
        ]);
    }
*/
    #[Route('/{id}', name: 'app_preference_alerte_show', methods: ['GET'])]
    public function show(PreferenceAlerte $preferenceAlerte): Response
    {
        return $this->render('preference_alerte/show.html.twig', [
            'preference_alerte' => $preferenceAlerte,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_preference_alerte_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PreferenceAlerte $preferenceAlerte, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PreferenceAlerteType::class, $preferenceAlerte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_preference_alerte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('preference_alerte/edit.html.twig', [
            'preference_alerte' => $preferenceAlerte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_preference_alerte_delete', methods: ['POST'])]
    public function delete(Request $request, PreferenceAlerte $preferenceAlerte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$preferenceAlerte->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($preferenceAlerte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_preference_alerte_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/FrontOffice/show/{id}', name: 'front_preference_alerte_show', methods: ['GET'])]
public function showPreferencesbyUser(PreferenceAlerteRepository $preferenceAlerteRepository, UserRepository $userRepository, int $id): Response
{   
    $currentUser = $this->getUser();

    if (!$currentUser) {
        $this->addFlash('error', 'Vous devez être connecté pour accéder à cette page.');
        return $this->redirectToRoute('app_login');
    }

    // Ensure the route id matches the logged in user; redirect if not
    if ($currentUser->getId() !== $id) {
        return $this->redirectToRoute('front_preference_alerte_show', ['id' => $currentUser->getId()]);
    }

    $preferenceAlerte = $preferenceAlerteRepository->findBy([
        'etudiant' => $currentUser
    ]);

    return $this->render('preference_alerte/showAlertFO.html.twig', [
        'preference_alertes' => $preferenceAlerte,
        'userId' => $currentUser->getId(),
        'user' => $currentUser,
    ]);
}
   #[Route('/FrontOffice/edit/{id}', name: 'front_preference_alerte_edit', methods: ['GET', 'POST'])]
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
    #[Route('/FrontOffice/add/{id}', name: 'front_preference_alerte_add', methods: ['GET', 'POST'])]
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
    #[Route('/FrontOffice/detail/{userId}/{preferenceId}', name: "front_preference_alerte_detail", methods: ['GET'])]
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

    #[Route('/preference/{id}/set-active', name: 'app_preference_set_active', methods: ['POST'])]
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
}
