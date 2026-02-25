<?php

namespace App\DataFixtures;

use App\Entity\Classe;
use App\Entity\GroupeProjet;
use App\Entity\MatiereClasse;
use App\Entity\ObjectifSante;
use App\Entity\PreferenceAlerte;
use App\Entity\PropositionReunion;
use App\Entity\ResetPasswordRequest;
use App\Entity\Salle;
use App\Entity\Seance;
use App\Entity\SubscriptionPack;
use App\Entity\SuiviBienEtre;
use App\Entity\SuiviTache;
use App\Entity\Tache;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $classes = [];
        $matieres = [];
        $salles = [];
        $users = [];
        $taches = [];
        $objectifs = [];
        $groupes = [];

        $filiereOptions = ['Informatique', 'Genie Logiciel', 'Data', 'Reseaux', 'IA'];
        $niveauOptions = ['1ere annee', '2eme annee', '3eme annee', '4eme annee', '5eme annee'];

        for ($i = 0; $i < 6; $i++) {
            $classe = new Classe();
            $classe->setNom('Classe ' . chr(65 + $i) . '-' . $faker->numberBetween(1, 3));
            $classe->setNiveau($faker->randomElement($niveauOptions));
            $classe->setAnneeuniversitaire('2025/2026');
            $classe->setFiliere($faker->randomElement($filiereOptions));
            $classe->setDescription($faker->sentence(8));

            $manager->persist($classe);
            $classes[] = $classe;
        }

        for ($i = 0; $i < 10; $i++) {
            $matiere = new MatiereClasse();
            $matiere->setNom($faker->unique()->word() . ' ' . $faker->randomElement(['I', 'II', 'III']));
            $matiere->setDescription($faker->sentence(12));
            $matiere->setCoefficient($faker->randomFloat(1, 1, 4));
            $matiere->setChargehoraire($faker->numberBetween(10, 60));
            $matiere->setScorecomplexite($faker->numberBetween(1, 10));
            $matiere->setProgression($faker->numberBetween(10, 100) . '%');

            $manager->persist($matiere);
            $matieres[] = $matiere;
        }

        foreach ($classes as $classe) {
            foreach ($faker->randomElements($matieres, $faker->numberBetween(3, 6)) as $matiere) {
                $matiere->addClass($classe);
            }
        }

        for ($i = 0; $i < 12; $i++) {
            $salle = new Salle();
            $block = $faker->randomElement(range('A', 'K'));
            $number = $faker->numberBetween(1, 40);

            $salle->setBlock($block);
            $salle->setNumber($number);
            $salle->setEtage($faker->numberBetween(1, 4));
            $salle->setCapacite($faker->numberBetween(10, 30));
            $salle->setDisponibilite($faker->boolean(80));

            $manager->persist($salle);
            $salles[] = $salle;
        }

        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $prenom = $faker->firstName;
            $nom = $faker->lastName;

            $user->setPrenom($prenom);
            $user->setNom($nom);
            $user->setEmail($faker->unique()->safeEmail());
            $user->setNumTel($faker->optional()->numerify('########'));
            $user->setDateDeNaissance($faker->dateTimeBetween('-35 years', '-12 years'));
            $user->setSexe($faker->randomElement(['Homme', 'Femme']));
            $user->setIsVerified($faker->boolean(80));
            $user->setCreatedAt(new \DateTimeImmutable());
            $user->setClasse($faker->randomElement($classes));

            $isBanned = $faker->boolean(8);
            $user->setIsBanned($isBanned);
            if ($isBanned) {
                $user->setBanReason($faker->sentence(6));
                $user->setBannedAt($faker->dateTimeBetween('-30 days', 'now'));
            }

            if ($i === 0) {
                $user->setRoles(['ROLE_ADMIN']);
                $user->setEmail('admin@example.com');
                $plainPassword = 'Admin123!';
            } else {
                $user->setRoles(['ROLE_USER']);
                $plainPassword = 'User123!';
            }

            $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);

            $manager->persist($user);
            $users[] = $user;
        }

        for ($i = 0; $i < 18; $i++) {
            $tache = new Tache();
            $start = $faker->dateTimeBetween('+1 days', '+20 days');
            $end = (clone $start)->modify('+' . $faker->numberBetween(1, 6) . ' hours');

            $tache->setTitre($faker->sentence(4));
            $tache->setType($faker->randomElement(['MANUEL', 'REUNION', 'REVISION', 'SANTE', 'EMPLOI']));
            $tache->setDateDebut($start);
            $tache->setDateFin($end);
            $tache->setPriorite($faker->randomElement(['FAIBLE', 'MOYEN', 'ELEVEE']));
            $tache->setStatut($faker->randomElement(['A_FAIRE', 'EN_COURS', 'TERMINEE', 'EN_RETARD', 'PAUSED']));
            $tache->setDescription($faker->optional()->sentence(10));
            $tache->setDureeEstimee($faker->optional()->numberBetween(1, 10));
            $tache->setDateEcheance((clone $start)->modify('+' . $faker->numberBetween(1, 3) . ' days'));
            $tache->setCreatedAt(new \DateTimeImmutable());
            $tache->setUpdatedAt(new \DateTimeImmutable());
            $tache->setUser($faker->randomElement($users));

            $manager->persist($tache);
            $taches[] = $tache;
        }

        foreach ($taches as $tache) {
            $suiviCount = $faker->numberBetween(1, 2);
            for ($i = 0; $i < $suiviCount; $i++) {
                $suivi = new SuiviTache();
                $suivi->setTache($tache);
                $suivi->setDateAction($faker->dateTimeBetween('-10 days', 'now'));
                $suivi->setAncienStatut($faker->randomElement(['A_FAIRE', 'EN_COURS', 'TERMINEE', 'EN_RETARD', 'PAUSED']));
                $suivi->setNouveauStatut($faker->randomElement(['A_FAIRE', 'EN_COURS', 'TERMINEE', 'EN_RETARD', 'PAUSED']));
                $suivi->setCommentaire($faker->optional()->sentence(8));
                $manager->persist($suivi);
            }
        }

        for ($i = 0; $i < 12; $i++) {
            $objectif = new ObjectifSante();
            $type = $faker->randomElement(['SOMMEIL', 'SPORT', 'ALIMENTATION']);

            $objectif->setTitre($faker->sentence(4));
            $objectif->setType($type);
            $objectif->setPriorite($faker->randomElement(['BASSE', 'MOYENNE', 'HAUTE']));
            $objectif->setStatut($faker->randomElement(['EN_COURS', 'ATTEINT', 'ABANDONNE']));
            $objectif->setDateDebut($faker->dateTimeBetween('-20 days', '-5 days'));
            $objectif->setDateFin($faker->dateTimeBetween('+5 days', '+30 days'));
            $objectif->setUser($faker->randomElement($users));

            if ($type === 'SOMMEIL') {
                $objectif->setValeurCible($faker->numberBetween(6, 9));
            } elseif ($type === 'SPORT') {
                $objectif->setValeurCible($faker->numberBetween(20, 90));
            } else {
                $objectif->setValeurCible($faker->numberBetween(2, 5));
            }

            $objectif->setProgression($faker->numberBetween(0, 100));

            $manager->persist($objectif);
            $objectifs[] = $objectif;
        }

        foreach ($objectifs as $objectif) {
            $entries = $faker->numberBetween(2, 4);
            $startRange = $objectif->getDateDebut() ?? new \DateTime('-10 days');
            $endRange = $objectif->getDateFin() ?? new \DateTime();
            $now = new \DateTime();

            if ($endRange > $now) {
                $endRange = $now;
            }

            if ($startRange > $endRange) {
                $startRange = (clone $endRange)->modify('-2 days');
            }

            for ($i = 0; $i < $entries; $i++) {
                $suivi = new SuiviBienEtre();
                $suivi->setObjectif($objectif);
                $suivi->setDateSaisie($faker->dateTimeBetween($startRange, $endRange));
                $suivi->setHumeur($faker->randomElement(['Motive', 'Fatigue', 'Heureux', 'Stresse']));
                $suivi->setQualiteSommeil($faker->numberBetween(3, 10));
                $suivi->setNiveauEnergie($faker->numberBetween(3, 10));
                $suivi->setNiveauStress($faker->numberBetween(0, 8));
                $suivi->setQualiteAlimentation($faker->numberBetween(3, 10));
                $suivi->setNotesLibres($faker->optional()->sentence(12));
                $suivi->setScore($suivi->calculerScore());

                $manager->persist($suivi);
            }
        }

        foreach ($users as $user) {
            $pref = new PreferenceAlerte();
            $pref->setEtudiant($user);
            $pref->setNom($faker->randomElement(['Standard', 'Travail', 'Examens']));
            $pref->setIsActive($faker->boolean(70));
            $pref->setIsDefault($faker->boolean(30));
            $pref->setEmailActif($faker->boolean(70));
            $pref->setPushActif($faker->boolean(60));
            $pref->setSiteNotifActive($faker->boolean(80));
            $pref->setDelaiRappelMin($faker->numberBetween(15, 120));
            $pref->setHeureSilenceDebut(new \DateTime('22:00'));
            $pref->setHeureSilenceFin(new \DateTime('07:00'));
            $pref->setTitre($faker->optional()->sentence(3));

            $manager->persist($pref);
        }

        for ($i = 0; $i < 6; $i++) {
            $groupe = new GroupeProjet();
            $groupe->setNomProjet($faker->sentence(3));
            $groupe->setMatiere($faker->randomElement($matieres)->getNom() ?? $faker->word());
            $groupe->setDescription($faker->sentence(12));
            $groupe->setCreatedAt(new \DateTimeImmutable());
            $groupe->setUpdatedAt($faker->dateTimeBetween('-10 days', 'now'));
            $groupe->setStatut($faker->randomElement(['EN_COURS', 'TERMINE', 'SUSPENDU']));
            $groupe->setCreatedBy($faker->randomElement($users));

            $members = $faker->randomElements($users, $faker->numberBetween(3, 6));
            foreach ($members as $member) {
                $groupe->addIdUser($member);
            }
            $groupe->setNbrMembre(count($members));

            $manager->persist($groupe);
            $groupes[] = $groupe;
        }

        foreach ($groupes as $groupe) {
            $meetCount = $faker->numberBetween(1, 2);
            for ($i = 0; $i < $meetCount; $i++) {
                $reunion = new PropositionReunion();
                $dateReunion = $faker->dateTimeBetween('+2 days', '+20 days');
                $startTime = (clone $dateReunion)->setTime($faker->numberBetween(9, 16), 0);
                $endTime = (clone $startTime)->modify('+' . $faker->numberBetween(1, 3) . ' hours');

                $reunion->setPropositionId($faker->numberBetween(1000, 9999));
                $reunion->setTitre($faker->sentence(4));
                $reunion->setDateReunion($dateReunion);
                $reunion->setHeureDebut($startTime);
                $reunion->setHeureFin($endTime);
                $reunion->setLieu($faker->randomElement(['Salle A1', 'Salle B2', 'En ligne']));
                $reunion->setDescription($faker->sentence(10));
                $reunion->setStatus($faker->randomElement(['PROPOSEE', 'VALIDEE', 'REFUSEE']));
                $reunion->setDateCreation(new \DateTime());
                $reunion->setNbrVoteAccept($faker->numberBetween(0, 10));
                $reunion->setIdGroupe($groupe);
                $reunion->setCreatedAt(new \DateTimeImmutable());
                $reunion->setUpdatedAt($faker->dateTimeBetween('-5 days', 'now'));

                $manager->persist($reunion);
            }
        }

        $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
        $types = ['Cours', 'TD', 'TP'];
        $modes = ['Présentiel', 'Distanciel', 'Hybride'];

        for ($i = 0; $i < 20; $i++) {
            $seance = new Seance();
            $date = $faker->dateTimeBetween('+1 days', '+30 days');
            $start = (clone $date)->setTime($faker->numberBetween(8, 16), 0);
            $end = (clone $start)->modify('+' . $faker->numberBetween(1, 3) . ' hours');

            $seance->setJour($faker->randomElement($jours));
            $seance->setTypeSeance($faker->randomElement($types));
            $seance->setMode($faker->randomElement($modes));
            $seance->setSalle($faker->randomElement($salles));
            $seance->setHeureDebut($start);
            $seance->setHeureFin($end);
            $seance->setMatiere($faker->randomElement($matieres));
            $seance->setClasse($faker->randomElement($classes));
            $seance->setCreatedAt(new \DateTimeImmutable());

            $manager->persist($seance);
        }

        $packData = [
            ['Basic', '9.99', 'EUR', 30, '🚀', '#3b82f6', false],
            ['Professional', '29.99', 'EUR', 30, '💼', '#ef4444', true],
            ['Enterprise', '99.99', 'EUR', 30, '🏢', '#a855f7', false],
        ];

        foreach ($packData as $packRow) {
            $pack = new SubscriptionPack();
            $pack->setName($packRow[0]);
            $pack->setDescription($faker->sentence(10));
            $pack->setPrice($packRow[1]);
            $pack->setCurrency($packRow[2]);
            $pack->setDurationDays($packRow[3]);
            $pack->setIcon($packRow[4]);
            $pack->setColor($packRow[5]);
            $pack->setIsPopular($packRow[6]);
            $pack->setFeatures([
                $faker->sentence(3),
                $faker->sentence(4),
                $faker->sentence(3),
            ]);
            $pack->setIsActive(true);

            $manager->persist($pack);
        }

        foreach ($faker->randomElements($users, 5) as $user) {
            $expiresAt = \DateTimeImmutable::createFromMutable(
                $faker->dateTimeBetween('+1 day', '+7 days')
            );
            $reset = new ResetPasswordRequest(
                $user,
                $expiresAt,
                $faker->uuid(),
                $faker->sha256()
            );
            $manager->persist($reset);
        }

        $manager->flush();
    }
}
