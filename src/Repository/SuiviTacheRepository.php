<?php

namespace App\Repository;

use App\Entity\SuiviTache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
/**
 * @extends ServiceEntityRepository<SuiviTache>
 */
class SuiviTacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuiviTache::class);
    }

    // =================================================================
    public function findByUserSince(User $user, ?\DateTimeInterface $since = null): array
    {
        $qb = $this->createQueryBuilder('s')
            ->join('s.tache', 't')
            ->andWhere('t.user = :user')
            ->setParameter('user', $user);

        if ($since !== null) {
            $qb->andWhere('s.dateAction >= :since')
            ->setParameter('since', $since);
        }

        return $qb->getQuery()->getResult();
    }
}
