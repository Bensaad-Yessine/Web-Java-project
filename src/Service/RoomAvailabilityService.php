<?php

namespace App\Service;

use App\Entity\Salle;
use App\Repository\SeanceRepository;

class RoomAvailabilityService
{
    private SeanceRepository $seanceRepo;

    /**
     * Fixed schedule slots.
     *
     * @var array<int, array{0:string,1:string}>
     */
    private array $allSlots = [
        ['09:00', '10:30'],
        ['10:45', '12:15'],
        ['13:30', '15:00'],
        ['15:15', '16:45'],
    ];

    public function __construct(SeanceRepository $seanceRepo)
    {
        $this->seanceRepo = $seanceRepo;
    }

    /**
     * @return array{isAvailable:bool, freeSlots:array, occupiedSlots:array}
     */
    public function getAvailability(Salle $salle, \DateTimeInterface $date): array
    {
        $start = (new \DateTimeImmutable($date->format('Y-m-d')))->setTime(0, 0, 0);
        $end = (new \DateTimeImmutable($date->format('Y-m-d')))->setTime(23, 59, 59);

        $seances = $this->seanceRepo->createQueryBuilder('s')
            ->andWhere('s.salle = :salle')
            ->andWhere('s.heureDebut >= :start')
            ->andWhere('s.heureDebut <= :end')
            ->setParameter('salle', $salle)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('s.heureDebut', 'ASC')
            ->getQuery()
            ->getResult();

        $occupied = [];
        $free = [];

        foreach ($this->allSlots as [$slotStart, $slotEnd]) {
            $slotStartDt = (new \DateTimeImmutable($date->format('Y-m-d')))->setTime(
                (int) substr($slotStart, 0, 2),
                (int) substr($slotStart, 3, 2)
            );
            $slotEndDt = (new \DateTimeImmutable($date->format('Y-m-d')))->setTime(
                (int) substr($slotEnd, 0, 2),
                (int) substr($slotEnd, 3, 2)
            );

            $taken = false;
            foreach ($seances as $seance) {
                $sd = $seance->getHeureDebut();
                $ef = $seance->getHeureFin();
                if ($sd instanceof \DateTimeInterface && $ef instanceof \DateTimeInterface) {
                    if ($sd < $slotEndDt && $ef > $slotStartDt) {
                        $taken = true;
                        break;
                    }
                }
            }

            if ($taken) {
                $occupied[] = [$slotStart, $slotEnd];
            } else {
                $free[] = [$slotStart, $slotEnd];
            }
        }

        return [
            'isAvailable' => count($free) > 0,
            'freeSlots' => $free,
            'occupiedSlots' => $occupied,
        ];
    }
}
