<?php

namespace App\Repository;

use App\Entity\Seance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Seance>
 */
class SeanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Seance::class);
    }

    //    /**
    //     * @return Seance[] Returns an array of Seance objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Seance
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    
    /**
     * @return Seance[] Returns an array of Seance objects matching filters
     */
    public function findWithFilters(
        ?string $search = null,
        ?string $jour = null,
        ?string $typeSeance = null,
        ?string $mode = null,
        ?int $classeId = null,
        ?int $matiereId = null,
        string $sort = 'id',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('s')
            ->leftJoin('s.matiere', 'm')
            ->leftJoin('s.classe', 'c')
            ->leftJoin('s.salle', 'sa');

        if ($search) {
            $qb->andWhere('m.nom LIKE :search OR c.nom LIKE :search OR sa.name LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($jour) {
            $qb->andWhere('s.jour = :jour')
               ->setParameter('jour', $jour);
        }

        if ($typeSeance) {
            $qb->andWhere('s.typeSeance = :type')
               ->setParameter('type', $typeSeance);
        }

        if ($mode) {
            $qb->andWhere('s.mode = :mode')
               ->setParameter('mode', $mode);
        }

        if ($classeId) {
            $qb->andWhere('s.classe = :classeId')
               ->setParameter('classeId', $classeId);
        }

        if ($matiereId) {
            $qb->andWhere('s.matiere = :matiereId')
               ->setParameter('matiereId', $matiereId);
        }

        $validSorts = ['id', 'jour', 'heureDebut', 'typeSeance', 'mode'];
        if (in_array($sort, $validSorts)) {
            $qb->orderBy('s.' . $sort, strtoupper($direction));
        }

        return $qb->getQuery()->getResult();
    }
}
