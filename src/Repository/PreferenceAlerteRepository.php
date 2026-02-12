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

    
    public function searchAjax(?string $titre, ?int $etudiantId, string $sort = 'desc'): array
    {
        $qb = $this->createQueryBuilder('p');
        if ($etudiantId) {
            $qb->andWhere('p.etudiant = :etudiantId')
                ->setParameter('etudiantId', $etudiantId);
        }
        if ($titre) {
            $qb->andWhere('p.nom LIKE :nom')
                ->setParameter('nom', '%' . $titre . '%');
        }

        // Updated filters for statut and isDefault (expecting '1' or '0' from frontend)
        $statut = isset($_GET['statut']) ? $_GET['statut'] : null;
        if ($statut === '1' || $statut === 1) {
            $qb->andWhere('p.isActive = true');
        } elseif ($statut === '0' || $statut === 0) {
            $qb->andWhere('p.isActive = false');
        }

        $isDefault = isset($_GET['isDefault']) ? $_GET['isDefault'] : null;
        if ($isDefault === '1' || $isDefault === 1) {
            $qb->andWhere('p.isDefault = true');
        } elseif ($isDefault === '0' || $isDefault === 0) {
            $qb->andWhere('p.isDefault = false');
        }

        $sort = strtolower($sort) === 'asc' ? 'ASC' : 'DESC';
        $qb->orderBy('p.dateCreation', $sort);
        return $qb->getQuery()->getResult();
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
