<?php

namespace App\Repository;

use App\Entity\PreferenceAlerte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PreferenceAlerte>
 */
class PreferenceAlerteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PreferenceAlerte::class);
    }

//    /**
//     * @return PreferenceAlerte[] Returns an array of PreferenceAlerte objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PreferenceAlerte
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    // SEARCH
    public function searchByTitle(string $title, User $user): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.etudiant = :user')
            ->andWhere('p.titre LIKE :title')
            ->setParameter('user', $user)
            ->setParameter('title', '%' . $title . '%')
            ->orderBy('p.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // sort by dates
    public function sortByDate(string $field, User $user): array
    {
        $allowedFields = ['dateCreation', 'dateMiseAJour'];

        if (!in_array($field, $allowedFields)) {
            $field = 'dateCreation'; // default safety
        }

        return $this->createQueryBuilder('p')
            ->where('p.etudiant = :user')
            ->setParameter('user', $user)
            ->orderBy('p.' . $field, 'DESC')
            ->getQuery()
            ->getResult();
    }


}
