<?php

namespace App\Repository;

use App\Entity\PropositionReunion;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PropositionReunion>
 */
class PropositionReunionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PropositionReunion::class);
    }

    /** Toutes les propositions de l'utilisateur (via ses groupes), actives (date >= aujourd'hui) */
    public function findActiveByUser(User $user): array
    {
        $today = new \DateTime('today midnight');
        return $this->createQueryBuilder('p')
            ->join('p.idGroupe', 'g')
            ->join('g.idUser', 'u')
            ->where('u.id = :userId')
            ->andWhere('p.dateReunion >= :today')
            ->setParameter('userId', $user->getId())
            ->setParameter('today', $today)
            ->orderBy('p.dateReunion', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /** Toutes les propositions archivées (date < aujourd'hui) de l'utilisateur */
    public function findArchivedByUser(User $user): array
    {
        $today = new \DateTime('today midnight');
        return $this->createQueryBuilder('p')
            ->join('p.idGroupe', 'g')
            ->join('g.idUser', 'u')
            ->where('u.id = :userId')
            ->andWhere('p.dateReunion < :today')
            ->setParameter('userId', $user->getId())
            ->setParameter('today', $today)
            ->orderBy('p.dateReunion', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** Toutes les propositions de l'utilisateur pour le calendrier (avec filtres optionnels) */
    public function findAllByUser(User $user, ?string $start = null, ?string $end = null, ?int $groupeId = null): array
    {
        $qb = $this->createQueryBuilder('p')
            ->join('p.idGroupe', 'g')
            ->join('g.idUser', 'u')
            ->where('u.id = :userId')
            ->setParameter('userId', $user->getId())
            ->orderBy('p.dateReunion', 'ASC');

        if ($start) {
            try {
                // FullCalendar envoie format ISO avec timezone, on prend juste la date
                $startDate = new \DateTime(substr($start, 0, 10));
                $qb->andWhere('p.dateReunion >= :start')
                   ->setParameter('start', $startDate);
            } catch (\Exception $e) { /* ignore filtre invalide */ }
        }
        if ($end) {
            try {
                $endDate = new \DateTime(substr($end, 0, 10));
                $qb->andWhere('p.dateReunion <= :end')
                   ->setParameter('end', $endDate);
            } catch (\Exception $e) { /* ignore filtre invalide */ }
        }
        if ($groupeId) {
            $qb->andWhere('g.id = :groupeId')
               ->setParameter('groupeId', $groupeId);
        }

        return $qb->getQuery()->getResult();
    }
}

