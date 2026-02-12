<?php

namespace App\Repository;

use App\Entity\SuiviBienEtre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuiviBienEtre>
 */
class SuiviBienEtreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuiviBienEtre::class);
    }
// src/Repository/SuiviBienEtreRepository.php

public function findByUserAndObjectif(int $userId, int $objectifId): array
{
    return $this->createQueryBuilder('s')
        ->join('s.objectif', 'o')
        ->andWhere('o.user = :userId')
        ->andWhere('o.id = :objectifId')
        ->setParameter('userId', $userId)
        ->setParameter('objectifId', $objectifId)
        ->orderBy('s.dateSaisie', 'DESC')
        ->getQuery()
        ->getResult();
}

//    /**
//     * @return SuiviBienEtre[] Returns an array of SuiviBienEtre objects
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

//    public function findOneBySomeField($value): ?SuiviBienEtre
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
