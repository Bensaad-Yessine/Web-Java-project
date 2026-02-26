<?php

namespace App\Service;

use App\Entity\Classe;
use App\Entity\MatiereClasse;
use App\Entity\Tache;
use App\Entity\Seance;
use App\Entity\User;
use App\Entity\Salle;
use App\Repository\MatiereClasseRepository;
use App\Repository\SalleRepository;
use App\Repository\TacheRepository;
use App\Repository\SeanceRepository;
use Doctrine\ORM\EntityManagerInterface;

class ProgramGenerationService
{
    private array $horairesDefinis = [
        ['debut' => '08:00', 'fin' => '10:00'],
        ['debut' => '10:15', 'fin' => '12:15'],
        ['debut' => '13:00', 'fin' => '15:00'],
        ['debut' => '15:15', 'fin' => '17:15'],
        ['debut' => '17:30', 'fin' => '19:30'],
    ];

    private array $joursSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];

    public function __construct(
        private MatiereClasseRepository $matiereClasseRepository,
        private SalleRepository $salleRepository,
        private TacheRepository $tacheRepository,
        private SeanceRepository $seanceRepository,
        private EntityManagerInterface $entityManager
    ) {}

    /**
     * Génère les tâches et séances pour une classe
     * @return array{seances: int, taches: int}
     */
    public function generateForClasse(Classe $classe, User $user): array
    {
        $matieres = $classe->getMatiereClasses();
        
        $tachesCrees = 0;
        $seancesCrees = 0;

        // Récupérer les salles disponibles
        $salles = $this->salleRepository->findBy(['disponibilite' => true]);
        
        if (empty($salles)) {
            throw new \Exception('Aucune salle disponible pour créer des séances.');
        }

        // Pour chaque matière, générer des séances et des tâches
        $heureIndex = 0;
        
        foreach ($matieres as $matiere) {
            $chargeHoraire = $matiere->getChargehoraire() ?? 0;
            
            if ($chargeHoraire <= 0) {
                continue;
            }

            // Répartir les heures sur la semaine
            $seancesParSemaine = $this->calculerSeancesParSemaine($chargeHoraire);
            
            // Créer les séances pour cette matière
            $seancesCrees += $this->genererSeances(
                $matiere, 
                $classe, 
                $salles, 
                $seancesParSemaine,
                $heureIndex
            );

            // Créer des tâches liées à cette matière
            $tachesCrees += $this->genererTaches($matiere, $user);

            // Passer à l'horaire suivant pour la prochaine matière
            $heureIndex = ($heureIndex + 1) % count($this->horairesDefinis);
        }

        return [
            'seances' => $seancesCrees,
            'taches' => $tachesCrees,
        ];
    }

    /**
     * Calcule le nombre de séances par semaine en fonction de la charge horaire
     */
    private function calculerSeancesParSemaine(int $chargeHoraire): int
    {
        // Supposons que chaque séance dure 2 heures en moyenne
        return (int) ceil($chargeHoraire / 2);
    }

    /**
     * Génère les séances pour une matière
     */
    private function genererSeances(
        MatiereClasse $matiere,
        Classe $classe,
        array $salles,
        int $nombreSeances,
        int $heureIndexDepart
    ): int {
        $crees = 0;
        
        // Nombre de semaines à couvrir (on假定 12 semaines de cours)
        $nombreSemaines = 12;
        
        // Répartir les séances sur les jours de la semaine
        $seancesParJour = (int) ceil($nombreSeances / count($this->joursSemaine));
        
        $jourIndex = 0;
        
        for ($semaine = 1; $semaine <= $nombreSemaines; $semaine++) {
            foreach ($this->joursSemaine as $jour) {
                // Limiter le nombre de séances par jour pour cette matière
                $seancesCeJour = min($seancesParJour, $nombreSeances - ($crees % $nombreSeances));
                
                for ($i = 0; $i < $seancesCeJour; $i++) {
                    if ($crees >= $nombreSeances) {
                        break 2;
                    }

                    $horaire = $this->horairesDefinis[($heureIndexDepart + $crees) % count($this->horairesDefinis)];
                    
                    // Choisir une salle (alterner entre les salles disponibles)
                    $salle = $salles[$crees % count($salles)];
                    
                    // Déterminer le type de séance (Cours, TD, TP)
                    $typesSeance = ['Cours', 'TD', 'TP'];
                    $typeSeance = $typesSeance[$crees % count($typesSeance)];
                    
                    // Déterminer le mode (Présentiel, Distanciel, Hybride)
                    $modes = ['Présentiel', 'Présentiel', 'Distanciel']; // Plus de présentiel
                    $mode = $modes[$crees % count($modes)];
                    
                    // Créer la séance
                    $seance = new Seance();
                    $seance->setJour($jour);
                    $seance->setTypeSeance($typeSeance);
                    $seance->setMode($mode);
                    $seance->setSalle($salle);
                    $seance->setMatiere($matiere);
                    $seance->setClasse($classe);
                    
                    // Parser les heures
                    $heureDebut = \DateTime::createFromFormat('H:i', $horaire['debut']);
                    $heureFin = \DateTime::createFromFormat('H:i', $horaire['fin']);
                    
                    // Ajouter le numéro de la semaine pour avoir des dates différentes
                    $dateReference = new \DateTime();
                    $dateReference->modify('+' . (($semaine - 1) * 7) . ' days');
                    
                    // Trouver le jour de la semaine correct
                    $jourNumero = array_search($jour, $this->joursSemaine) + 1; // 1 = Lundi
                    $dateReference->setISODate(
                        (int)$dateReference->format('Y'),
                        (int)$dateReference->format('W'),
                        $jourNumero
                    );
                    
                    // Combiner date et heure
                    $dateDebut = clone $dateReference;
                    $dateDebut->setTime(
                        (int)substr($horaire['debut'], 0, 2),
                        (int)substr($horaire['debut'], 3, 2)
                    );
                    
                    $dateFin = clone $dateReference;
                    $dateFin->setTime(
                        (int)substr($horaire['fin'], 0, 2),
                        (int)substr($horaire['fin'], 3, 2)
                    );
                    
                    $seance->setHeureDebut($dateDebut);
                    $seance->setHeureFin($dateFin);
                    $seance->setCreatedAt(new \DateTimeImmutable());
                    
                    $this->entityManager->persist($seance);
                    $crees++;
                }
            }
        }
        
        $this->entityManager->flush();
        
        return $crees;
    }

    /**
     * Génère des tâches pour un utilisateur basées sur une matière
     */
    private function genererTaches(MatiereClasse $matiere, User $user): int
    {
        $crees = 0;
        
        // Types de tâches possibles
        $typesTaches = [
            'REVISION' => 'Révision - ' . $matiere->getNom(),
            'MANUEL' => 'Exercice - ' . $matiere->getNom(),
            'REUNION' => 'Session de travail - ' . $matiere->getNom(),
        ];
        
        // Priorités basées sur le score de complexité
        $scoreComplexite = $matiere->getScorecomplexite() ?? 5;
        
        if ($scoreComplexite >= 7) {
            $priorite = 'ELEVEE';
        } elseif ($scoreComplexite >= 4) {
            $priorite = 'MOYEN';
        } else {
            $priorite = 'FAIBLE';
        }
        
        // Créer 2-3 tâches par matière
        $nombreTaches = rand(2, 3);
        
        $dateDebut = new \DateTime();
        $dateDebut->modify('+1 day'); // Commencer demain
        
        for ($i = 0; $i < $nombreTaches; $i++) {
            $type = array_rand($typesTaches);
            
            $tache = new Tache();
            $tache->setTitre($typesTaches[$type]);
            $tache->setType($type);
            $tache->setPriorite($priorite);
            $tache->setStatut('A_FAIRE');
            $tache->setUser($user);
            $tache->setDescription('Tâche générée automatiquement pour la matière ' . $matiere->getNom() . '. Charge horaire: ' . $matiere->getChargehoraire() . 'h. Complexité: ' . $scoreComplexite . '/10');
            
            // Dates
            $dateDebutTache = clone $dateDebut;
            $dateDebutTache->modify('+' . ($i * 3) . ' days');
            $dateDebutTache->setTime(9 + ($i % 8), 0); // Entre 9h et 17h
            
            $tache->setDateDebut($dateDebutTache);
            
            // Durée entre 1h et 3h
            $duree = rand(1, 3);
            $dateFinTache = clone $dateDebutTache;
            $dateFinTache->modify('+' . $duree . ' hours');
            
            $tache->setDateFin($dateFinTache);
            $tache->setDureeEstimee($duree * 60); // En minutes
            
            // Date d'échéance (2 semaines plus tard)
            $dateEcheance = clone $dateDebutTache;
            $dateEcheance->modify('+14 days');
            $tache->setDateEcheance($dateEcheance);
            
            $tache->setCreatedAt(new \DateTimeImmutable());
            
            $this->entityManager->persist($tache);
            $crees++;
        }
        
        $this->entityManager->flush();
        
        return $crees;
    }

    /**
     * Vérifie si des données existent déjà pour cette classe
     */
    public function hasExistingData(Classe $classe): bool
    {
        $seances = $this->seanceRepository->findBy(['classe' => $classe]);
        return count($seances) > 0;
    }

    /**
     * Supprime les données existantes avant regenerate
     */
    public function clearExistingData(Classe $classe, User $user): void
    {
        // Supprimer les séances de la classe
        $seances = $this->seanceRepository->findBy(['classe' => $classe]);
        foreach ($seances as $seance) {
            $this->entityManager->remove($seance);
        }
        
        // Supprimer les tâches de l'utilisateur liées aux matières de la classe
        $taches = $this->tacheRepository->findBy(['user' => $user]);
        foreach ($taches as $tache) {
            // On garde seulement les tâches qui ne sont pas liées à cette classe
            $description = $tache->getDescription() ?? '';
            foreach ($classe->getMatiereClasses() as $matiere) {
                if (strpos($description, $matiere->getNom()) !== false) {
                    $this->entityManager->remove($tache);
                    break;
                }
            }
        }
        
        $this->entityManager->flush();
    }
}
