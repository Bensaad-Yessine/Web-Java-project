<?php

namespace App\Repository;

use App\Entity\PreferenceAlerte;
use App\Entity\User;
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

    // SEARCH - user specific search (front office)
    public function searchByTitle(?string $title, User $user): array
    {
        $qb = $this->createQueryBuilder('p')
            ->where('p.etudiant = :user')
            ->setParameter('user', $user);

        if ($title) {
            $qb->andWhere('LOWER(p.nom) LIKE :title')
               ->setParameter('title', '%' . mb_strtolower($title) . '%');
        }

        return $qb->orderBy('p.dateCreation', 'DESC')
                  ->getQuery()
                  ->getResult();
    }

    // sort by dates - user specific
    public function sortByDate(?string $field, User $user): array
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

    // ADMIN search (global list) with optional filters and sorting
    public function searchAdmin(?string $title, ?string $sort = null, ?bool $isActive = null, ?bool $isDefault = null): array
    {
        $qb = $this->createQueryBuilder('p');

        if ($title) {
            $qb->andWhere('LOWER(p.nom) LIKE :title')
               ->setParameter('title', '%' . mb_strtolower($title) . '%');
        }

        if ($isActive !== null) {
            $qb->andWhere('p.isActive = :isActive')
               ->setParameter('isActive', $isActive);
        }

        if ($isDefault !== null) {
            $qb->andWhere('p.isDefault = :isDefault')
               ->setParameter('isDefault', $isDefault);
        }

        // Secure sort
        if ($sort && in_array($sort, ['dateCreation', 'dateMiseAJour'])) {
            $qb->orderBy('p.' . $sort, 'DESC');
        } else {
            $qb->orderBy('p.dateCreation', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }


}
