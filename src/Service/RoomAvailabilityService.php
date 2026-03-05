<?php

namespace App\Service;

use App\Entity\Salle;
use App\Entity\Seance;
use Doctrine\ORM\EntityManagerInterface;

class RoomAvailabilityService
{
    private EntityManagerInterface $em;

    // predefined slots (start-end) in H:i format
    private array $slots = [
        ['09:00', '10:30'],
        ['10:45', '12:15'],
        ['13:30', '15:00'],
        ['15:15', '16:45'],
    ];

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * calcule disponibilité d'une salle pour une date donnée
     * retourne ['isAvailable'=>bool,'freeSlots'=>array,'occupiedSlots'=>array]
     */
    public function getAvailability(Salle $salle, \DateTimeInterface $date): array
    {
        // récupère toutes les séances de cette salle à la date
        $startDay = (clone $date)->setTime(0,0,0);
        $endDay   = (clone $date)->setTime(23,59,59);

        $qb = $this->em->getRepository(Seance::class)->createQueryBuilder('s');
        $qb->andWhere('s.salle = :salle')
            ->andWhere('s.heureDebut BETWEEN :start AND :end')
            ->setParameter('salle', $salle)
            ->setParameter('start', $startDay)
            ->setParameter('end', $endDay);

        $seances = $qb->getQuery()->getResult();

        $occupied = [];
        foreach ($this->slots as $idx => [$start, $end]) {
            $occupied[$idx] = false;
            foreach ($seances as $seance) {
                $sd = $seance->getHeureDebut()->format('H:i');
                $ed = $seance->getHeureFin()->format('H:i');
                // overlap simple: start <= seance.start < end
                if ($sd < $end && $ed > $start) {
                    $occupied[$idx] = true;
                    break;
                }
            }
        }

        $free = [];
        $occ = [];
        foreach ($occupied as $idx => $isOcc) {
            if ($isOcc) {
                $occ[] = $this->slots[$idx];
            } else {
                $free[] = $this->slots[$idx];
            }
        }

        return [
            'isAvailable' => count($free) > 0,
            'freeSlots'   => $free,
            'occupiedSlots' => $occ,
        ];
    }

    /** retourne tous les blocs existants (ex: A,B,C.. sans F) */
    public function getBlocks(): array
    {
        // on pourrait les dériver de la BDD ; pour l'instant grille fixe
        return ['A','B','C','D','E','G','H','I','J','K'];
    }
}
