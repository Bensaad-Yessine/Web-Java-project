<?php

namespace App\Repository;

use App\Entity\Salle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Salle>
 */
class SalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Salle::class);
    }

    //    /**
    //     * @return Salle[] Returns an array of Salle objects
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

    //    public function findOneBySomeField($value): ?Salle
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findWithFilters(
        ?string $search = null,
        ?string $block = null,
        ?int $minCapacite = null,
        ?int $maxCapacite = null,
        string $sort = 'id',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('s');

        if ($search) {
            $qb->andWhere('s.name LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($block) {
            $qb->andWhere('s.block = :block')
               ->setParameter('block', $block);
        }

        if ($minCapacite) {
            $qb->andWhere('s.capacite >= :minCapacite')
               ->setParameter('minCapacite', $minCapacite);
        }

        if ($maxCapacite) {
            $qb->andWhere('s.capacite <= :maxCapacite')
               ->setParameter('maxCapacite', $maxCapacite);
        }

        $allowedSorts = ['id', 'name', 'block', 'number', 'capacite'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'id';
        }

        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
        $qb->orderBy('s.' . $sort, $direction);

        return $qb->getQuery()->getResult();
    }

    public function getDistinctBlocks(): array
    {
        return $this->createQueryBuilder('s')
            ->select('DISTINCT s.block')
            ->orderBy('s.block', 'ASC')
            ->getQuery()
            ->getResult();
    }
}

