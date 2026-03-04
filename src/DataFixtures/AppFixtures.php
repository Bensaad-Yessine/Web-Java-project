<?php

namespace App\DataFixtures;

use App\Entity\Attendance;
use App\Entity\Classe;
use App\Entity\Conversation;
use App\Entity\GroupeProjet;
use App\Entity\MatiereClasse;
use App\Entity\Message;
use App\Entity\Notification;
use App\Entity\ObjectifSante;
use App\Entity\PreferenceAlerte;
use App\Entity\PropositionReunion;
use App\Entity\QuizAttempt;
use App\Entity\QuizAttemptDetail;
use App\Entity\QuizQuestion;
use App\Entity\ResetPasswordRequest;
use App\Entity\Salle;
use App\Entity\Seance;
use App\Entity\StudentIntelligenceProfile;
use App\Entity\SubscriptionPack;
use App\Entity\SuiviBienEtre;
use App\Entity\SuiviTache;
use App\Entity\Tache;
use App\Entity\User;
use App\Entity\Vote;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * AppFixtures — Realistic scenario for an academic management platform.
 *
 * Scenario: "Institut Supérieur de Technologie de Tunis" (ISTT)
 * - 3 departments: Informatique, Génie Logiciel, Data & IA
 * - 9 classes (3 per department, across years)
 * - 12 real subjects with coherent names per department
 * - 15 rooms across 3 building blocks
 * - 1 admin + 5 professors + 60 students (realistic names)
 * - Full academic schedule, tasks, wellness tracking, quizzes, messaging, etc.
 */
class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $faker->seed(42); // Reproducible data

        $classes      = [];
        $matieres     = [];
        $salles       = [];
        $users        = [];
        $students     = [];
        $professors   = [];
        $taches       = [];
        $objectifs    = [];
        $groupes      = [];
        $seances      = [];
        $propositions = [];
        $conversations = [];
        $quizQuestions = [];

        // =====================================================================
        // SALLES — 3 blocks (A, B, C), 5 rooms each
        // =====================================================================
        echo "Creating Salles...\n";
        $salleData = [
            // Block A — Informatique
            ['A', 1, 0, 35], ['A', 2, 0, 30], ['A', 3, 1, 40],
            ['A', 4, 1, 25], ['A', 5, 2, 50],
            // Block B — Génie Logiciel
            ['B', 1, 0, 30], ['B', 2, 1, 35], ['B', 3, 1, 20],
            ['B', 4, 2, 45], ['B', 5, 2, 30],
            // Block C — Data & IA
            ['C', 1, 0, 40], ['C', 2, 0, 30], ['C', 3, 1, 25],
            ['C', 4, 1, 35], ['C', 5, 3, 60],
        ];

        foreach ($salleData as $s) {
            $salle = new Salle();
            $salle->setBlock($s[0]);
            $salle->setNumber($s[1]);
            $salle->setEtage($s[2]);
            $salle->setCapacite($s[3]);
            $salle->setDisponibilite(true);
            $manager->persist($salle);
            $salles[] = $salle;
        }

        // =====================================================================
        // CLASSES — 9 classes, 3 departments × 3 years
        // =====================================================================
        echo "Creating Classes...\n";
        $classData = [
            // Informatique
            ['INF-1A', '1ere annee', 'Informatique', 'Première année du cycle ingénieur en informatique, fondamentaux algorithmiques et systèmes.'],
            ['INF-2A', '2eme annee', 'Informatique', 'Approfondissement des structures de données, réseaux et base de données.'],
            ['INF-3A', '3eme annee', 'Informatique', 'Spécialisation en développement web, mobile et cloud computing.'],
            // Génie Logiciel
            ['GL-1A',  '1ere annee', 'Genie Logiciel', 'Introduction au génie logiciel, UML, et méthodes agiles.'],
            ['GL-2A',  '2eme annee', 'Genie Logiciel', 'Architecture logicielle, design patterns et tests automatisés.'],
            ['GL-3A',  '3eme annee', 'Genie Logiciel', 'DevOps, CI/CD, microservices et gestion de projet avancée.'],
            // Data & IA
            ['DATA-1A','2eme annee', 'Data',           'Statistiques appliquées, Python data science et visualisation.'],
            ['DATA-2A','3eme annee', 'Data',           'Machine learning, traitement du langage naturel et big data.'],
            ['IA-3A',  '4eme annee', 'IA',             'Deep learning, vision par ordinateur et déploiement de modèles IA.'],
        ];

        foreach ($classData as $c) {
            $classe = new Classe();
            $classe->setNom($c[0]);
            $classe->setNiveau($c[1]);
            $classe->setAnneeuniversitaire('2025/2026');
            $classe->setFiliere($c[2]);
            $classe->setDescription($c[3]);
            $manager->persist($classe);
            $classes[] = $classe;
        }

        // =====================================================================
        // MATIERES — 18 realistic subjects mapped to departments
        // =====================================================================
        echo "Creating Matieres...\n";
        $matiereData = [
            // Informatique
            ['Algorithmique Avancée',       'Structures de données avancées, complexité algorithmique, graphes et arbres.', 4.0, 45, 8],
            ['Systèmes d\'Exploitation',    'Processus, threads, mémoire virtuelle, systèmes de fichiers Linux/Windows.',   3.5, 40, 7],
            ['Réseaux Informatiques',       'Protocoles TCP/IP, routage, sécurité réseau et administration système.',       3.0, 35, 6],
            ['Base de Données',             'Modélisation relationnelle, SQL avancé, NoSQL et optimisation de requêtes.',   3.5, 40, 7],
            ['Développement Web',           'HTML5, CSS3, JavaScript ES6+, frameworks React et Symfony PHP.',               3.0, 50, 5],
            ['Sécurité Informatique',       'Cryptographie, pentesting, OWASP, normes ISO 27001 et gestion des risques.',   3.5, 35, 9],
            // Génie Logiciel
            ['UML & Modélisation',          'Diagrammes de classes, séquences, cas d\'utilisation et architecture MVC.',    3.0, 30, 6],
            ['Design Patterns',             'Patterns GoF, SOLID, DRY, Clean Architecture et refactoring avancé.',         3.5, 35, 8],
            ['Tests & Qualité Logicielle',  'TDD, BDD, tests unitaires, intégration continue et couverture de code.',      3.0, 30, 7],
            ['DevOps & CI/CD',              'Docker, Kubernetes, Jenkins, GitLab CI et déploiement automatisé.',            3.5, 40, 8],
            ['Gestion de Projet Agile',     'Scrum, Kanban, estimation, sprint planning et rétrospectives.',                2.5, 25, 5],
            ['Architecture Microservices',  'API REST, gRPC, message brokers RabbitMQ/Kafka et service mesh.',              4.0, 40, 9],
            // Data & IA
            ['Statistiques & Probabilités', 'Distributions, tests d\'hypothèses, régression et analyse multivariée.',      3.5, 35, 7],
            ['Python Data Science',         'NumPy, Pandas, Matplotlib, Seaborn et analyse exploratoire de données.',      3.0, 45, 5],
            ['Machine Learning',            'Algorithmes supervisés/non-supervisés, validation croisée et hyperparamètres.',4.0, 50, 9],
            ['Deep Learning',               'Réseaux de neurones, CNN, RNN, transformers et fine-tuning de modèles.',       4.0, 50, 10],
            ['Big Data & Spark',            'Hadoop, Apache Spark, Hive, traitement distribué et pipelines de données.',    3.5, 40, 9],
            ['NLP & Vision par Ordinateur', 'BERT, GPT, OpenCV, détection d\'objets et traitement d\'images médicales.',   4.0, 45, 10],
        ];

        foreach ($matiereData as $m) {
            $matiere = new MatiereClasse();
            $matiere->setNom($m[0]);
            $matiere->setDescription($m[1]);
            $matiere->setCoefficient($m[2]);
            $matiere->setChargehoraire($m[3]);
            $matiere->setScorecomplexite($m[4]);
            $manager->persist($matiere);
            $matieres[] = $matiere;
        }

        // Assign subjects to classes (realistic mapping)
        $classMatiereMap = [
            0 => [0, 1, 2, 3],         // INF-1A: Algo, OS, Réseaux, BDD
            1 => [0, 3, 4, 5],         // INF-2A: Algo, BDD, Web, Sécurité
            2 => [4, 5, 9, 10],        // INF-3A: Web, Sécurité, DevOps, Agile
            3 => [6, 7, 10, 12],       // GL-1A: UML, DP, Agile, Stats
            4 => [6, 7, 8, 11],        // GL-2A: UML, DP, Tests, Microservices
            5 => [8, 9, 10, 11],       // GL-3A: Tests, DevOps, Agile, Microservices
            6 => [12, 13, 14],         // DATA-1A: Stats, Python, ML
            7 => [14, 15, 16],         // DATA-2A: ML, DL, BigData
            8 => [15, 16, 17],         // IA-3A: DL, BigData, NLP
        ];

        foreach ($classMatiereMap as $classIdx => $matiereIndexes) {
            foreach ($matiereIndexes as $mIdx) {
                if (isset($classes[$classIdx]) && isset($matieres[$mIdx])) {
                    $matieres[$mIdx]->addClass($classes[$classIdx]);
                }
            }
        }

        // =====================================================================
        // USERS — Admin, 5 professors, 60 students
        // =====================================================================
        echo "Creating Users...\n";

        // --- Admin ---
        $admin = new User();
        $admin->setPrenom('Karim');
        $admin->setNom('Benali');
        $admin->setEmail('admin@istt.tn');
        $admin->setNumTel('0021671234567');
        $admin->setDateDeNaissance(new \DateTime('1980-03-15'));
        $admin->setSexe('Homme');
        $admin->setIsVerified(true);
        $admin->setCreatedAt(new \DateTimeImmutable('2024-09-01'));
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'Admin123!'));
        $manager->persist($admin);
        $users[] = $admin;

        // --- Professors ---
        $professorData = [
            ['Sonia',   'Gharbi',    'sonia.gharbi@istt.tn',   'Femme',  '1978-06-20', '0021671100001'],
            ['Ahmed',   'Trabelsi',  'ahmed.trabelsi@istt.tn', 'Homme',  '1975-11-05', '0021671100002'],
            ['Leila',   'Mansouri',  'leila.mansouri@istt.tn', 'Femme',  '1982-02-28', '0021671100003'],
            ['Bilel',   'Hamdi',     'bilel.hamdi@istt.tn',    'Homme',  '1979-08-14', '0021671100004'],
            ['Fatma',   'Saidi',     'fatma.saidi@istt.tn',    'Femme',  '1985-04-09', '0021671100005'],
        ];

        foreach ($professorData as $p) {
            $prof = new User();
            $prof->setPrenom($p[0]);
            $prof->setNom($p[1]);
            $prof->setEmail($p[2]);
            $prof->setSexe($p[3]);
            $prof->setDateDeNaissance(new \DateTime($p[4]));
            $prof->setNumTel($p[5]);
            $prof->setIsVerified(true);
            $prof->setCreatedAt(new \DateTimeImmutable('2024-09-01'));
            $prof->setRoles(['ROLE_PROF']);
            $prof->setPassword($this->passwordHasher->hashPassword($prof, 'Prof123!'));
            $manager->persist($prof);
            $users[] = $prof;
            $professors[] = $prof;
        }

        // --- Students (60) — realistic Tunisian student names ---
        $studentNames = [
            // Male students
            ['Mohamed',  'Ayari'],   ['Yassine',  'Boughanmi'], ['Oussama',  'Cherni'],
            ['Hamza',    'Dridi'],   ['Amine',    'Elloumi'],   ['Rami',     'Ferjani'],
            ['Tarek',    'Gharbi'],  ['Slim',     'Hamrouni'],  ['Nader',    'Jebali'],
            ['Khalil',   'Khemiri'], ['Lotfi',    'Lassoued'],  ['Marouane', 'Mejri'],
            ['Nabil',    'Najar'],   ['Adel',     'Oueslati'],  ['Sami',     'Riahi'],
            ['Walid',    'Sghaier'], ['Bilel',    'Tlili'],     ['Amir',     'Yahyaoui'],
            ['Hassen',   'Zouari'],  ['Firas',    'Abidi'],     ['Ghassen',  'Belhaj'],
            ['Iheb',     'Chaabane'],['Jamel',    'Dhouibi'],   ['Karim',    'Ennaifer'],
            ['Lamine',   'Ferchichi'],['Mehdi',   'Ghribi'],    ['Nizar',    'Hmida'],
            ['Ossama',   'Jlassi'],  ['Riadh',    'Kammoun'],   ['Seif',     'Ltifi'],
            // Female students
            ['Amira',    'Ben Ali'], ['Boutheina','Ben Amor'],  ['Chiraz',   'Ben Salah'],
            ['Dorsaf',   'Bouzid'],  ['Emna',     'Cherif'],    ['Fatma',    'Dali'],
            ['Ghofrane', 'Ezzine'],  ['Hela',     'Fekih'],     ['Ines',     'Guermazi'],
            ['Jihen',    'Hamdi'],   ['Khadija',  'Jaziri'],    ['Lamia',    'Keskes'],
            ['Mariem',   'Labidi'],  ['Nadia',    'Maaloul'],   ['Olfa',     'Naifar'],
            ['Rahma',    'Ouerghi'], ['Sana',     'Riahi'],     ['Thouraya', 'Saad'],
            ['Wafa',     'Tounsi'],  ['Yasmine',  'Zaied'],     ['Zeineb',   'Abdelkader'],
            ['Amal',     'Baccouche'],['Besma',   'Chouchane'], ['Chaima',   'Dhifallah'],
            ['Dorra',    'Elloumi'], ['Eya',      'Ferjani'],   ['Farah',    'Gargouri'],
            ['Hajer',    'Haddad'],  ['Imen',     'Jarray'],    ['Khouloud', 'Khelifi'],
        ];

        // Distribute students across classes (~6-8 per class)
        $classStudentMap = [
            0 => range(0, 6),   // INF-1A: 7 students
            1 => range(7, 13),  // INF-2A: 7 students
            2 => range(14, 19), // INF-3A: 6 students
            3 => range(20, 26), // GL-1A: 7 students
            4 => range(27, 33), // GL-2A: 7 students
            5 => range(34, 39), // GL-3A: 6 students
            6 => range(40, 46), // DATA-1A: 7 students
            7 => range(47, 53), // DATA-2A: 7 students
            8 => range(54, 59), // IA-3A: 6 students
        ];

        foreach ($studentNames as $idx => $sn) {
            $student = new User();
            $student->setPrenom($sn[0]);
            $student->setNom($sn[1]);
            $student->setEmail(strtolower($sn[0]) . '.' . strtolower(str_replace(' ', '', $sn[1])) . '@etudiant.istt.tn');
            $student->setSexe(in_array($sn[0], ['Mohamed','Yassine','Oussama','Hamza','Amine','Rami','Tarek','Slim',
                'Nader','Khalil','Lotfi','Marouane','Nabil','Adel','Sami','Walid','Bilel','Amir','Hassen',
                'Firas','Ghassen','Iheb','Jamel','Karim','Lamine','Mehdi','Nizar','Ossama','Riadh','Seif']) ? 'Homme' : 'Femme');
            $student->setDateDeNaissance($faker->dateTimeBetween('-26 years', '-18 years'));
            $student->setNumTel($faker->numerify('0#########'));
            $student->setIsVerified($faker->boolean(90));
            $student->setCreatedAt(new \DateTimeImmutable('2025-09-15'));
            $student->setRoles(['ROLE_USER']);
            $student->setPassword($this->passwordHasher->hashPassword($student, 'Student123!'));

            // Assign to class
            foreach ($classStudentMap as $classIdx => $studentIndexes) {
                if (in_array($idx, $studentIndexes)) {
                    $student->setClasse($classes[$classIdx]);
                    break;
                }
            }

            $manager->persist($student);
            $users[] = $student;
            $students[] = $student;
        }

        // Flush early to get IDs
        $manager->flush();

        // =====================================================================
        // SEANCES — Realistic weekly schedule (100 sessions across semester)
        // =====================================================================
        echo "Creating Seances...\n";
        $jours  = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];
        $types  = ['Cours', 'TD', 'TP'];
        $modes  = ['Présentiel', 'Présentiel', 'Présentiel', 'Distanciel', 'Hybride']; // weighted toward présentiel
        $timeSlots = [
            ['08:00', '10:00'], ['08:00', '11:00'],
            ['10:00', '12:00'], ['11:00', '13:00'],
            ['13:00', '15:00'], ['14:00', '16:00'],
            ['15:00', '17:00'], ['16:00', '18:00'],
        ];

        $seanceCount = 0;
        foreach ($classes as $classIdx => $classe) {
            $classMatiereIndexes = $classMatiereMap[$classIdx] ?? [];
            foreach ($classMatiereIndexes as $mIdx) {
                $matiere = $matieres[$mIdx];
                // 3-5 sessions per subject per class
                for ($s = 0; $s < $faker->numberBetween(3, 5); $s++) {
                    $seance = new Seance();
                    $baseDate = $faker->dateTimeBetween('2025-10-01', '2026-01-31');
                    $slot = $faker->randomElement($timeSlots);
                    $start = (clone $baseDate)->setTime((int)explode(':', $slot[0])[0], 0);
                    $end   = (clone $baseDate)->setTime((int)explode(':', $slot[1])[0], 0);

                    $seance->setJour($faker->randomElement($jours));
                    $seance->setTypeSeance($faker->randomElement($types));
                    $seance->setMode($faker->randomElement($modes));
                    $seance->setSalle($faker->randomElement($salles));
                    $seance->setHeureDebut($start);
                    $seance->setHeureFin($end);
                    $seance->setMatiere($matiere);
                    $seance->setClasse($classe);
                    $seance->setCreatedAt(new \DateTimeImmutable('2025-09-20'));
                    $manager->persist($seance);
                    $seances[] = $seance;
                    $seanceCount++;
                }
            }
        }
        echo "  → {$seanceCount} séances created\n";

        // =====================================================================
        // TACHES — Realistic academic tasks per student
        // =====================================================================
        echo "Creating Taches...\n";
        $taskTemplates = [
            ['REVISION',  ['Réviser le cours de %s',     'Préparer le partiel de %s',       'Revoir les exercices de %s']],
            ['MANUEL',    ['Rendre le TP de %s',          'Préparer le rapport de %s',        'Finir le projet %s']],
            ['REUNION',   ['Réunion de groupe projet %s', 'Réunion de préparation %s',        'Débrief projet %s']],
            ['SANTE',     ['Session sport du soir',       'Méditation 20 min',                'Pause écrans - marche 30 min']],
            ['EMPLOI',    ['Candidature stage %s',        'Préparer CV pour %s',              'Entretien de simulation %s']],
        ];

        foreach ($students as $student) {
            $classe = $student->getClasse();
            $classMatiereIndexes = [];
            foreach ($classStudentMap as $cIdx => $sIndexes) {
                if ($classe === $classes[$cIdx]) {
                    $classMatiereIndexes = $classMatiereMap[$cIdx] ?? [];
                    break;
                }
            }

            $studentMatieres = array_map(fn($i) => $matieres[$i], array_filter($classMatiereIndexes, fn($i) => isset($matieres[$i])));

            // 4-8 tasks per student
            for ($t = 0; $t < $faker->numberBetween(4, 8); $t++) {
                $tache    = new Tache();
                $typeData = $faker->randomElement($taskTemplates);
                $type     = $typeData[0];
                $matNom   = !empty($studentMatieres) ? $faker->randomElement($studentMatieres)->getNom() : 'cours';
                $title    = sprintf($faker->randomElement($typeData[1]), $matNom);

                $start = $faker->dateTimeBetween('2025-10-01', '2026-01-15');
                $end   = (clone $start)->modify('+' . $faker->numberBetween(1, 4) . ' hours');

                $statuts  = ['A_FAIRE', 'A_FAIRE', 'EN_COURS', 'EN_COURS', 'TERMINE', 'EN_RETARD', 'PAUSED'];
                $priorites = ['FAIBLE', 'MOYEN', 'MOYEN', 'ELEVEE'];
                $statut    = $faker->randomElement($statuts);

                $tache->setTitre($title);
                $tache->setType($type);
                $tache->setDateDebut($start);
                $tache->setDateFin($end);
                $tache->setPriorite($faker->randomElement($priorites));
                $tache->setStatut($statut);
                $tache->setDescription($faker->sentence(12));
                $tache->setDureeEstimee($faker->numberBetween(1, 6));
                $tache->setDateEcheance((clone $start)->modify('+' . $faker->numberBetween(1, 5) . ' days'));
                $tache->setCreatedAt(new \DateTimeImmutable());
                $tache->setUpdatedAt(new \DateTimeImmutable());
                $tache->setUser($student);
                $manager->persist($tache);
                $taches[] = $tache;
            }
        }
        echo "  → " . count($taches) . " tâches created\n";

        // =====================================================================
        // SUIVI TACHES — History of status changes
        // =====================================================================
        echo "Creating SuiviTaches...\n";
        $statusFlow = [
            ['A_FAIRE', 'EN_COURS'],
            ['EN_COURS', 'TERMINE'],
            ['EN_COURS', 'EN_RETARD'],
            ['EN_RETARD', 'TERMINE'],
            ['EN_COURS', 'PAUSED'],
            ['PAUSED', 'EN_COURS'],
        ];

        foreach ($taches as $tache) {
            $flow = $faker->randomElements($statusFlow, $faker->numberBetween(1, 3));
            foreach ($flow as $transition) {
                $suivi = new SuiviTache();
                $suivi->setTache($tache);
                $suivi->setDateAction($faker->dateTimeBetween('-20 days', 'now'));
                $suivi->setAncienStatut($transition[0]);
                $suivi->setNouveauStatut($transition[1]);
                $suivi->setCommentaire($faker->optional(0.7)->sentence(8));
                $manager->persist($suivi);
            }
        }

        // =====================================================================
        // OBJECTIFS SANTE — Wellness goals per student
        // =====================================================================
        echo "Creating ObjectifSantes...\n";
        $objectifTemplates = [
            'SOMMEIL'       => ['Dormir 8h par nuit', 'Améliorer la qualité du sommeil', 'Se coucher avant minuit'],
            'SPORT'         => ['Courir 30 min par jour', 'Gym 3x par semaine', 'Marcher 10 000 pas/jour'],
            'ALIMENTATION'  => ['Manger 5 fruits et légumes/jour', 'Réduire la caféine', 'Préparer ses repas soi-même'],
        ];

        foreach ($students as $student) {
            // Each student has 1-3 wellness goals
            $nbObjectifs = $faker->numberBetween(1, 3);
            $types = $faker->randomElements(array_keys($objectifTemplates), $nbObjectifs);
            foreach ($types as $type) {
                $objectif = new ObjectifSante();
                $objectif->setTitre($faker->randomElement($objectifTemplates[$type]));
                $objectif->setType($type);
                $objectif->setPriorite($faker->randomElement(['BASSE', 'MOYENNE', 'HAUTE']));
                $objectif->setStatut($faker->randomElement(['EN_COURS', 'EN_COURS', 'ATTEINT', 'ABANDONNE']));
                $startDate = $faker->dateTimeBetween('-30 days', '-10 days');
                $objectif->setDateDebut($startDate);
                $objectif->setDateFin((clone $startDate)->modify('+' . $faker->numberBetween(30, 90) . ' days'));
                $objectif->setUser($student);

                if ($type === 'SOMMEIL')      { $objectif->setValeurCible($faker->numberBetween(7, 9)); }
                elseif ($type === 'SPORT')    { $objectif->setValeurCible($faker->numberBetween(30, 60)); }
                else                          { $objectif->setValeurCible($faker->numberBetween(3, 5)); }

                $manager->persist($objectif);
                $objectifs[] = $objectif;
            }
        }

        // =====================================================================
        // SUIVI BIEN-ETRE — Daily wellness entries
        // =====================================================================
        echo "Creating SuiviBienEtre...\n";
        $humeurs = ['Motive', 'Motive', 'Fatigue', 'Heureux', 'Stresse', 'Stresse', 'Neutre'];

        foreach ($objectifs as $objectif) {
            $startDate = $objectif->getDateDebut() ?? new \DateTime('-30 days');
            $endDate   = new \DateTime(); // today

            // Daily entries for past 2 weeks
            for ($day = 0; $day < $faker->numberBetween(5, 14); $day++) {
                $suivi = new SuiviBienEtre();
                $date  = (clone $startDate)->modify("+{$day} days");
                if ($date > $endDate) break;

                $suivi->setObjectif($objectif);
                $suivi->setDateSaisie($date);
                $suivi->setHumeur($faker->randomElement($humeurs));

                // Correlated scores: stressed students sleep less, eat worse
                $stress = $faker->numberBetween(0, 8);
                $suivi->setNiveauStress($stress);
                $suivi->setQualiteSommeil($faker->numberBetween(max(3, 8 - $stress), 10));
                $suivi->setNiveauEnergie($faker->numberBetween(max(2, 7 - (int)($stress / 2)), 10));
                $suivi->setQualiteAlimentation($faker->numberBetween(max(3, 8 - (int)($stress / 3)), 10));
                $suivi->setNotesLibres($faker->optional(0.4)->sentence(10));
                $suivi->setScore($suivi->calculerScore());
                $manager->persist($suivi);
            }
        }

        // =====================================================================
        // PREFERENCE ALERTES — One realistic profile per student
        // =====================================================================
        echo "Creating PreferenceAlertes...\n";
        $alerteProfiles = [
            ['Profil Standard', true, false, true, true, true, 30],
            ['Examens Intensifs', true, true, true, true, true, 15],
            ['Mode Vacances', false, false, false, false, true, 60],
            ['Profil Travail', true, false, true, false, true, 45],
        ];

        foreach ($students as $student) {
            $profile = $faker->randomElement($alerteProfiles);
            $pref = new PreferenceAlerte();
            $pref->setEtudiant($student);
            $pref->setNom($profile[0]);
            $pref->setIsActive($profile[1]);
            $pref->setIsDefault($profile[2]);
            $pref->setEmailActif($profile[3]);
            $pref->setPushActif($profile[4]);
            $pref->setSiteNotifActive($profile[5]);
            $pref->setDelaiRappelMin($profile[6]);
            $pref->setHeureSilenceDebut(new \DateTime('23:00'));
            $pref->setHeureSilenceFin(new \DateTime('07:30'));
            $manager->persist($pref);
        }

        // =====================================================================
        // GROUPES PROJET — 12 realistic project groups
        // =====================================================================
        echo "Creating GroupeProjets...\n";
        $projectTopics = [
            // INF
            'Application de gestion de bibliothèque universitaire',
            'Système de réservation de salles en ligne',
            'Plateforme e-learning pour étudiants ISTT',
            // GL
            'Outil de suivi de bugs collaboratif',
            'Application mobile de gestion de tâches agiles',
            'Dashboard CI/CD pour équipes DevOps',
            // Data
            'Analyse prédictive des résultats académiques',
            'Système de recommandation de cours personnalisés',
            'Détection d\'anomalies dans les données de présence',
            // IA
            'Chatbot pédagogique basé sur GPT-4',
            'Classification automatique de devoirs par NLP',
            'Système de détection de plagiat par IA',
        ];

        foreach ($projectTopics as $pIdx => $topic) {
            // Map groups to correct classes
            $classIdx = (int)($pIdx / 3);
            $groupe = new GroupeProjet();
            $groupe->setNomProjet($topic);

            // Pick a relevant subject
            $classMatiereIndexes = $classMatiereMap[$classIdx] ?? [0];
            $matiereIdx = $faker->randomElement($classMatiereIndexes);
            $groupe->setMatiere($matieres[$matiereIdx]->getNom());
            $groupe->setDescription('Projet de fin de module — ' . $topic);
            $groupe->setCreatedAt(new \DateTimeImmutable('2025-10-15'));
            $groupe->setUpdatedAt($faker->dateTimeBetween('-15 days', 'now'));
            $groupe->setStatut($faker->randomElement(['EN_COURS', 'EN_COURS', 'EN_COURS', 'TERMINE', 'SUSPENDU']));
            $groupe->setCreatedBy($faker->randomElement($students));

            // 3-5 members from same class
            $classStudents = array_filter($students, fn($s) => $s->getClasse() === $classes[$classIdx]);
            $classStudents = array_values($classStudents);
            $memberCount = min(count($classStudents), $faker->numberBetween(3, 5));
            if ($memberCount > 0) {
                $members = $faker->randomElements($classStudents, $memberCount);
                foreach ($members as $member) {
                    $groupe->addIdUser($member);
                }
                $groupe->setNbrMembre($memberCount);
            }

            $manager->persist($groupe);
            $groupes[] = $groupe;
        }

        // =====================================================================
        // PROPOSITIONS REUNION — Meeting proposals per group
        // =====================================================================
        echo "Creating PropositionReunions...\n";
        $meetingTopics = [
            'Kickoff du projet — répartition des rôles',
            'Revue du cahier des charges',
            'Point sprint — démo intermédiaire',
            'Débogage et résolution de blocages',
            'Revue de code et merge request',
            'Préparation de la soutenance finale',
            'Rétrospective sprint',
        ];
        $lieux = ['Salle A1', 'Salle B2', 'Salle C3', 'Bibliothèque ISTT', 'Discord (en ligne)', 'Google Meet'];

        $propositionId = 1000;
        foreach ($groupes as $groupe) {
            // 2-4 meetings per group
            for ($r = 0; $r < $faker->numberBetween(2, 4); $r++) {
                $reunion = new PropositionReunion();
                $dateReunion = $faker->dateTimeBetween('2025-10-15', '2026-01-20');
                $hour = $faker->randomElement([9, 10, 11, 14, 15, 16]);
                $startTime = (clone $dateReunion)->setTime($hour, 0);
                $endTime   = (clone $startTime)->modify('+' . $faker->numberBetween(1, 2) . ' hours');

                $reunion->setPropositionId($propositionId++);
                $reunion->setTitre($faker->randomElement($meetingTopics));
                $reunion->setDateReunion($dateReunion);
                $reunion->setHeureDebut($startTime);
                $reunion->setHeureFin($endTime);
                $reunion->setLieu($faker->randomElement($lieux));
                $reunion->setDescription('Réunion de travail — ' . $groupe->getNomProjet());
                $reunion->setStatus($faker->randomElement(['PROPOSEE', 'PROPOSEE', 'VALIDEE', 'VALIDEE', 'REFUSEE']));
                $reunion->setDateCreation(new \DateTime());
                $reunion->setNbrVoteAccept($faker->numberBetween(1, 5));
                $reunion->setIdGroupe($groupe);
                $reunion->setCreatedAt(new \DateTimeImmutable());
                $reunion->setUpdatedAt($faker->dateTimeBetween('-5 days', 'now'));
                $manager->persist($reunion);
                $propositions[] = $reunion;
            }
        }

        // =====================================================================
        // VOTES — Group members vote on meeting proposals
        // =====================================================================
        echo "Creating Votes...\n";
        foreach ($propositions as $proposition) {
            $groupe = $proposition->getIdGroupe();
            if (!$groupe) continue;
            $members = $groupe->getIdUser()->toArray();
            if (empty($members)) continue;

            foreach ($members as $member) {
                // 80% of members vote
                if ($faker->boolean(80)) {
                    $vote = new Vote();
                    $vote->setProposition($proposition);
                    $vote->setUser($member);
                    // Weighted toward 'pour'
                    $vote->setVote($faker->randomElement(['pour', 'pour', 'pour', 'contre', 'abstention']));
                    $vote->setVotedAt($faker->dateTimeBetween('-10 days', 'now'));
                    $manager->persist($vote);
                }
            }
        }

        // =====================================================================
        // CONVERSATIONS & MESSAGES — Student peer & student-professor chats
        // =====================================================================
        echo "Creating Conversations...\n";
        $conversationPairs = [];

        // Student-to-student within same class (30 conversations)
        foreach ($classes as $classIdx => $classe) {
            $classStudents = array_filter($students, fn($s) => $s->getClasse() === $classe);
            $classStudents = array_values($classStudents);
            if (count($classStudents) < 2) continue;
            for ($c = 0; $c < min(3, count($classStudents) - 1); $c++) {
                $u1 = $classStudents[$c];
                $u2 = $classStudents[$c + 1];
                $pairKey = min(spl_object_id($u1), spl_object_id($u2)) . '-' . max(spl_object_id($u1), spl_object_id($u2));
                if (isset($conversationPairs[$pairKey])) continue;
                $conversationPairs[$pairKey] = true;
                $conv = new Conversation();
                $conv->setUser1($u1);
                $conv->setUser2($u2);
                $created = $faker->dateTimeBetween('-60 days', '-2 days');
                $conv->setCreatedAt(new \DateTimeImmutable($created->format('Y-m-d H:i:s')));
                $conv->setUpdatedAt(new \DateTimeImmutable($faker->dateTimeBetween($created, 'now')->format('Y-m-d H:i:s')));
                $manager->persist($conv);
                $conversations[] = $conv;
            }
        }

        // Student-to-professor (15 conversations)
        foreach ($professors as $prof) {
            $profStudents = $faker->randomElements($students, 3);
            foreach ($profStudents as $student) {
                $conv = new Conversation();
                $conv->setUser1($student);
                $conv->setUser2($prof);
                $created = $faker->dateTimeBetween('-45 days', '-1 days');
                $conv->setCreatedAt(new \DateTimeImmutable($created->format('Y-m-d H:i:s')));
                $conv->setUpdatedAt(new \DateTimeImmutable($faker->dateTimeBetween($created, 'now')->format('Y-m-d H:i:s')));
                $manager->persist($conv);
                $conversations[] = $conv;
            }
        }

        // =====================================================================
        // MESSAGES — Contextual academic messages
        // =====================================================================
        echo "Creating Messages...\n";
        $studentMessages = [
            'Bonjour, est-ce que tu as fini la partie front-end du projet ?',
            'J\'ai un problème avec l\'exercice 3, tu peux m\'aider ?',
            'On se retrouve demain à 14h pour travailler sur le rapport ?',
            'J\'ai poussé les modifications sur le repo Git.',
            'Tu as les notes du cours de mercredi ? J\'étais absent.',
            'Le prof a changé la date du rendu, c\'est maintenant le vendredi.',
            'J\'ai trouvé un bug dans notre code, je te montre demain.',
            'Est-ce que tu as commencé à réviser pour le partiel ?',
        ];
        $profMessages = [
            'Bonjour, votre rapport est bien structuré, mais la partie analyse manque de détail.',
            'N\'oubliez pas le rendu du TP pour vendredi 18h au plus tard.',
            'Votre présentation de vendredi était excellente, bravo !',
            'Merci pour votre question en cours, c\'était très pertinent.',
            'Je vous rappelle que les consultations sont le mercredi de 10h à 12h.',
        ];

        foreach ($conversations as $conv) {
            $u1 = $conv->getUser1();
            $u2 = $conv->getUser2();
            $isProfConv = in_array($u2, $professors, true);
            $numMessages = $faker->numberBetween(3, 12);
            $lastDate = \DateTime::createFromImmutable($conv->getCreatedAt());

            for ($m = 0; $m < $numMessages; $m++) {
                $message = new Message();
                $message->setConversation($conv);

                // Alternate senders
                if ($m % 2 === 0) {
                    $message->setSender($u1);
                    $message->setContent($faker->randomElement($studentMessages));
                } else {
                    $message->setSender($u2);
                    $message->setContent($isProfConv
                        ? $faker->randomElement($profMessages)
                        : $faker->randomElement($studentMessages));
                }

                $msgDate = $faker->dateTimeBetween($lastDate, 'now');
                $message->setCreatedAt(new \DateTimeImmutable($msgDate->format('Y-m-d H:i:s')));
                $lastDate = $msgDate;
                $isRead = ($m < $numMessages - 1); // Last message often unread
                $message->setIsRead($isRead);
                if ($isRead) {
                    $message->setReadAt(new \DateTimeImmutable($faker->dateTimeBetween($msgDate, 'now')->format('Y-m-d H:i:s')));
                }
                $message->setIsEdited(false);
                $manager->persist($message);
            }
        }

        // =====================================================================
        // NOTIFICATIONS — Academic notifications per student
        // =====================================================================
        echo "Creating Notifications...\n";
        $notifTemplates = [
            'INFO'    => [
                'Nouveau cours disponible : %s',
                'Votre séance de %s a été modifiée',
                'Rappel : TP de %s dans 2 heures',
                'Nouveau message de votre professeur',
            ],
            'WARNING' => [
                'Votre tâche "%s" est en retard',
                'Attention : rendu du projet dans 3 jours',
                'Taux d\'assiduité faible en %s',
                'Votre score bien-être est en baisse',
            ],
            'RISK'    => [
                'Risque d\'échec détecté en %s',
                'Plusieurs tâches en retard — action requise',
                'Absence non justifiée en %s',
            ],
        ];

        foreach ($students as $student) {
            $studentTaches = array_filter($taches, fn($t) => $t->getUser() === $student);
            $studentTaches = array_values($studentTaches);
            $numNotifs = $faker->numberBetween(3, 10);

            for ($n = 0; $n < $numNotifs; $n++) {
                $notification = new Notification();
                $notification->setUser($student);
                $type = $faker->randomElement(['INFO', 'INFO', 'WARNING', 'RISK']);
                $notification->setType($type);
                $templates = $notifTemplates[$type];
                $matNom = $faker->randomElement($matieres)->getNom();
                $notification->setMessage(sprintf($faker->randomElement($templates), $matNom));

                if ($faker->boolean(60) && !empty($studentTaches)) {
                    $notification->setTache($faker->randomElement($studentTaches));
                }
                $notification->setIsRead($faker->boolean(55));
                $notification->setCreatedAt($faker->dateTimeBetween('-20 days', 'now'));
                $manager->persist($notification);
            }
        }

        // =====================================================================
        // QUIZ QUESTIONS — Real-style questions per subject
        // =====================================================================
        echo "Creating QuizQuestions...\n";
        $questionBank = [
            'Algorithmique Avancée' => [
                ['Quelle est la complexité de l\'algorithme de tri rapide (QuickSort) dans le pire cas ?',
                 'O(n log n)', 'O(n²)', 'O(n)', 'O(log n)', 'B',
                 'Dans le pire cas (tableau déjà trié), QuickSort effectue O(n²) comparaisons.'],
                ['Quel algorithme de recherche s\'applique uniquement sur un tableau trié ?',
                 'Recherche linéaire', 'Recherche binaire', 'Recherche hash', 'Recherche BFS', 'B',
                 'La recherche binaire nécessite impérativement un tableau trié pour fonctionner.'],
                ['Quelle structure de données est utilisée pour implémenter un BFS (parcours en largeur) ?',
                 'Pile (Stack)', 'File (Queue)', 'Arbre binaire', 'Graphe pondéré', 'B',
                 'Le BFS utilise une file (FIFO) pour explorer les nœuds niveau par niveau.'],
            ],
            'Base de Données' => [
                ['Quel est le rôle de la clause GROUP BY en SQL ?',
                 'Filtrer les lignes', 'Regrouper les lignes par valeur', 'Trier les résultats', 'Joindre deux tables', 'B',
                 'GROUP BY regroupe les lignes ayant des valeurs identiques dans des colonnes spécifiées.'],
                ['Quelle forme normale élimine les dépendances transitives ?',
                 '1NF', '2NF', '3NF', 'BCNF', 'C',
                 'La 3ème forme normale (3NF) interdit les dépendances transitives entre attributs non-clés.'],
            ],
            'Machine Learning' => [
                ['Quelle métrique est la plus adaptée pour un problème de classification déséquilibrée ?',
                 'Accuracy', 'F1-Score', 'MSE', 'R²', 'B',
                 'Le F1-Score équilibre précision et rappel, mieux adapté aux classes déséquilibrées.'],
                ['Qu\'est-ce que l\'overfitting ?',
                 'Modèle trop simple', 'Modèle qui mémorise les données d\'entraînement',
                 'Modèle avec trop peu de features', 'Erreur de calcul du gradient', 'B',
                 'L\'overfitting survient quand le modèle s\'adapte trop aux données d\'entraînement et perd en généralisation.'],
            ],
            'DevOps & CI/CD' => [
                ['Quel outil est utilisé pour la containerisation d\'applications ?',
                 'Kubernetes', 'Docker', 'Jenkins', 'Ansible', 'B',
                 'Docker permet de packager une application et ses dépendances dans un conteneur isolé.'],
                ['Que signifie CI dans CI/CD ?',
                 'Container Integration', 'Continuous Integration', 'Code Inspection', 'Cloud Infrastructure', 'B',
                 'CI (Continuous Integration) désigne l\'intégration continue du code via des pipelines automatisés.'],
            ],
        ];

        foreach ($matieres as $matiere) {
            $nom = $matiere->getNom();
            $bankQuestions = $questionBank[$nom] ?? [];

            // Add bank questions first
            foreach ($bankQuestions as $bq) {
                $q = new QuizQuestion();
                $q->setMatiere($matiere);
                $q->setQuestion($bq[0]);
                $q->setChoiceA($bq[1]);
                $q->setChoiceB($bq[2]);
                $q->setChoiceC($bq[3]);
                $q->setChoiceD($bq[4]);
                $q->setCorrectChoice($bq[5]);
                $q->setExplanation($bq[6]);
                $manager->persist($q);
                $quizQuestions[] = $q;
            }

            // Fill up to 8 questions with generic ones
            $remaining = 8 - count($bankQuestions);
            for ($qi = 0; $qi < $remaining; $qi++) {
                $q = new QuizQuestion();
                $q->setMatiere($matiere);
                $q->setQuestion('En ' . $nom . ', lequel des éléments suivants est correct ?');
                $q->setChoiceA($faker->sentence(5));
                $q->setChoiceB($faker->sentence(5));
                $q->setChoiceC($faker->sentence(5));
                $q->setChoiceD($faker->sentence(5));
                $q->setCorrectChoice($faker->randomElement(['A', 'B', 'C', 'D']));
                $q->setExplanation($faker->sentence(12));
                $manager->persist($q);
                $quizQuestions[] = $q;
            }
        }
        echo "  → " . count($quizQuestions) . " questions created\n";

        // =====================================================================
        // QUIZ ATTEMPTS — Students take quizzes on their subjects
        // =====================================================================
        echo "Creating QuizAttempts...\n";
        foreach ($students as $student) {
            $classe = $student->getClasse();
            $classIdx = array_search($classe, $classes);
            $classMatiereIndexes = $classMatiereMap[$classIdx] ?? [];
            $studentMatieres = array_map(fn($i) => $matieres[$i], array_filter($classMatiereIndexes, fn($i) => isset($matieres[$i])));

            foreach ($studentMatieres as $matiere) {
                // Each student does 1-2 attempts per subject
                for ($a = 0; $a < $faker->numberBetween(1, 2); $a++) {
                    $attempt = new QuizAttempt();
                    $attempt->setUser($student);
                    $attempt->setMatiere($matiere);

                    $matiereQs = array_values(array_filter($quizQuestions, fn($q) => $q->getMatiere() === $matiere));
                    $numQs = min(count($matiereQs), $faker->numberBetween(4, 8));

                    if ($numQs === 0) continue;

                    $selected = $faker->randomElements($matiereQs, $numQs);
                    $correct  = 0;

                    $attempt->setTotalCount($numQs);
                    $manager->persist($attempt);

                    foreach ($selected as $question) {
                        $detail = new QuizAttemptDetail();
                        $detail->setAttempt($attempt);
                        $detail->setQuestion($question);
                        $detail->setCorrectAnswer($question->getCorrectChoice());
                        // Better students answer correctly more often
                        $userAnswer = $faker->boolean(65)
                            ? $question->getCorrectChoice()
                            : $faker->randomElement(['A', 'B', 'C', 'D']);
                        $detail->setUserAnswer($userAnswer);
                        $isCorrect = ($userAnswer === $question->getCorrectChoice());
                        $detail->setIsCorrect($isCorrect);
                        if ($isCorrect) $correct++;
                        $manager->persist($detail);
                    }

                    $attempt->setCorrectCount($correct);
                    $attempt->setPercent($numQs > 0 ? round($correct / $numQs * 100, 1) : 0);
                }
            }
        }

        // =====================================================================
        // STUDENT INTELLIGENCE PROFILES — AI behavioral analysis
        // =====================================================================
        echo "Creating StudentIntelligenceProfiles...\n";
        foreach ($students as $student) {
            if (!$faker->boolean(75)) continue; // 75% of students have a profile

            $profile = new StudentIntelligenceProfile();
            $profile->setUser($student);
            $profile->setAnalyzedAt($faker->dateTimeBetween('-15 days', 'now'));

            // Coherent behavioral data
            $isHighAchiever = $faker->boolean(40);
            $abandonment    = $isHighAchiever ? $faker->randomFloat(2, 0.0, 0.15) : $faker->randomFloat(2, 0.15, 0.50);
            $completion     = $isHighAchiever ? $faker->randomFloat(2, 0.75, 1.0)  : $faker->randomFloat(2, 0.30, 0.75);
            $startDelay     = $isHighAchiever ? $faker->randomFloat(2, 0, 30)      : $faker->randomFloat(2, 30, 180);

            $profile->setAbandonmentRate($abandonment);
            $profile->setCompletionRate($completion);
            $profile->setAverageStartDelayMinutes($startDelay);
            $profile->setAverageCompletionDurationMinutes($faker->randomFloat(2, 45, 200));
            $profile->setPauseFrequency($faker->randomFloat(2, 0, 0.4));
            $profile->setMostProductiveHour($faker->randomElement([9, 10, 14, 15, 20, 21]));
            $profile->setMostProductiveDayOfWeek($faker->numberBetween(1, 5));
            $profile->setAbandonmentRateByType([
                'MANUEL'   => round($abandonment * 1.1, 2),
                'REUNION'  => round($abandonment * 0.5, 2),
                'REVISION' => round($abandonment * 1.3, 2),
                'SANTE'    => round($abandonment * 0.8, 2),
            ]);
            $profile->setCompletionRateByType([
                'MANUEL'   => round($completion * 0.9, 2),
                'REUNION'  => round(min(1.0, $completion * 1.1), 2),
                'REVISION' => round($completion * 0.85, 2),
                'SANTE'    => round($completion * 0.7, 2),
            ]);
            $profile->setAverageStartDelayByType([
                'MANUEL'   => (int)($startDelay * 1.2),
                'REUNION'  => (int)($startDelay * 0.3),
                'REVISION' => (int)($startDelay * 1.5),
                'SANTE'    => (int)($startDelay * 2.0),
            ]);
            $profile->setGlobalRiskTrend($isHighAchiever
                ? $faker->randomFloat(2, 0, 0.25)
                : $faker->randomFloat(2, 0.25, 0.85));
            $profile->setForgottenTaskProbability($faker->randomFloat(2, 0, 0.3));
            $profile->setOverdueProbability($abandonment * 1.5 > 1 ? 1.0 : $abandonment * 1.5);
            $profile->setWeeklyProductivitySummary(
                $isHighAchiever
                    ? "L'étudiant(e) montre une régularité exemplaire avec un faible taux d'abandon et une gestion efficace du temps. Les tâches de révision sont traitées avec priorité. Recommandé pour un rôle de tuteur pair."
                    : "Des difficultés de régularité ont été détectées. Le délai de démarrage des tâches est significatif, notamment en révisions. Un accompagnement personnalisé est conseillé pour améliorer l'organisation."
            );
            $profile->setBehavioralAdvice(
                $isHighAchiever
                    ? "Continuez à utiliser les créneaux matinaux pour les tâches complexes. Pensez à diversifier vos méthodes de révision (flashcards, quiz, enseignement aux pairs)."
                    : "Essayez la technique Pomodoro pour réduire le délai de démarrage. Fixez des micro-objectifs quotidiens. Évitez les sessions de révision tardives — votre productivité est meilleure en journée."
            );
            $manager->persist($profile);
        }

        // =====================================================================
        // ATTENDANCES — Students scanned into sessions
        // =====================================================================
        echo "Creating Attendances...\n";
        foreach ($seances as $seance) {
            $classe = $seance->getClasse();
            if (!$classe) continue;

            $classStudents = array_values(array_filter($students, fn($s) => $s->getClasse() === $classe));
            if (empty($classStudents)) continue;

            foreach ($classStudents as $student) {
                // 85% attendance rate
                if (!$faker->boolean(85)) continue;

                $attendance = new Attendance();
                $attendance->setSeance($seance);
                $attendance->setStudent($student);

                // Weighted status: mostly present
                $status = $faker->randomElement([
                    Attendance::STATUS_PRESENT, Attendance::STATUS_PRESENT,
                    Attendance::STATUS_PRESENT, Attendance::STATUS_PRESENT,
                    Attendance::STATUS_LATE,    Attendance::STATUS_ABSENT,
                    Attendance::STATUS_REJECTED,
                ]);
                $attendance->setStatus($status);

                if ($status !== Attendance::STATUS_ABSENT) {
                    $attendance->setScannedAt($faker->dateTimeBetween('-30 days', 'now'));
                    $attendance->setDeviceId($faker->uuid());
                    $attendance->setGpsLat($faker->latitude(36.7, 36.9));  // Tunis area
                    $attendance->setGpsLng($faker->longitude(10.1, 10.3));
                }
                if ($status === Attendance::STATUS_LATE) {
                    $attendance->setMinutesLate($faker->numberBetween(5, 25));
                }
                if ($status === Attendance::STATUS_REJECTED) {
                    $attendance->setRejectionReason($faker->randomElement([
                        'QR code expiré', 'Localisation hors campus', 'Appareil non reconnu',
                    ]));
                }
                $manager->persist($attendance);
            }
        }

        // =====================================================================
        // SUBSCRIPTION PACKS — 4 realistic tiers
        // =====================================================================
        echo "Creating SubscriptionPacks...\n";
        $packData = [
            ['Gratuit',       '0.00',  'TND', 365, '🎓', '#6b7280', false,
             ['Accès aux cours de base', 'Quiz illimités', 'Suivi de 3 tâches', 'Support communautaire']],
            ['Étudiant Pro',  '9.90',  'TND', 30,  '🚀', '#3b82f6', false,
             ['Tout du plan Gratuit', 'Tâches illimitées', 'Analyse IA comportementale', 'Alertes personnalisées', 'Export PDF des rapports']],
            ['Premium',       '19.90', 'TND', 30,  '💎', '#ef4444', true,
             ['Tout du plan Pro', 'Accès prioritaire aux nouvelles fonctionnalités', 'Support 24/7', 'Statistiques avancées', 'Intégration agenda Google/Outlook']],
            ['Institution',   '299.00','TND', 365, '🏫', '#a855f7', false,
             ['Accès multi-utilisateurs (50+)', 'Tableau de bord administrateur', 'API dédiée', 'Formation & onboarding inclus', 'SLA garanti 99.9%']],
        ];

        foreach ($packData as $pd) {
            $pack = new SubscriptionPack();
            $pack->setName($pd[0]);
            $pack->setDescription('Abonnement ' . $pd[0] . ' — ' . $pd[7][0]);
            $pack->setPrice($pd[1]);
            $pack->setCurrency($pd[2]);
            $pack->setDurationDays($pd[3]);
            $pack->setIcon($pd[4]);
            $pack->setColor($pd[5]);
            $pack->setIsPopular($pd[6]);
            $pack->setFeatures($pd[7]);
            $pack->setIsActive(true);
            $manager->persist($pack);
        }

        // =====================================================================
        // RESET PASSWORD REQUESTS — A few pending requests
        // =====================================================================
        echo "Creating ResetPasswordRequests...\n";
        $resetCandidates = $faker->randomElements($students, 6);
        foreach ($resetCandidates as $user) {
            $expiresAt = \DateTimeImmutable::createFromMutable(
                $faker->dateTimeBetween('+1 hour', '+24 hours')
            );
            $reset = new ResetPasswordRequest(
                $user,
                $expiresAt,
                $faker->uuid(),
                $faker->sha256()
            );
            $manager->persist($reset);
        }

        // =====================================================================
        // FINAL FLUSH
        // =====================================================================
        echo "Flushing all data to database...\n";
        $manager->flush();

        echo "\n✅ All fixtures loaded successfully!\n";
        echo "────────────────────────────────────────\n";
        echo "  Classes      : " . count($classes)       . "\n";
        echo "  Matières     : " . count($matieres)      . "\n";
        echo "  Salles       : " . count($salles)        . "\n";
        echo "  Users        : " . count($users)         . " (1 admin, 5 profs, 60 étudiants)\n";
        echo "  Séances      : " . count($seances)       . "\n";
        echo "  Tâches       : " . count($taches)        . "\n";
        echo "  Objectifs    : " . count($objectifs)     . "\n";
        echo "  Groupes      : " . count($groupes)       . "\n";
        echo "  Réunions     : " . count($propositions)  . "\n";
        echo "  Conversations: " . count($conversations) . "\n";
        echo "  Quiz Qs      : " . count($quizQuestions) . "\n";
        echo "────────────────────────────────────────\n";
    }
}