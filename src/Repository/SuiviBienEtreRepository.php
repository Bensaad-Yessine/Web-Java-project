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
public function filterByObjectifUser(
    User $user,
    ObjectifSante $objectif,
    ?string $q,
    ?string $humeur,
    string $sortBy = 'dateSaisie',
    string $sortDir = 'DESC'
): array {
    $qb = $this->createQueryBuilder('s')
        ->join('s.objectif', 'o')
        ->andWhere('o.id = :oid')
        ->andWhere('o.user = :user')
        ->setParameter('oid', $objectif->getId())
        ->setParameter('user', $user);

    if ($humeur) {
        $qb->andWhere('s.humeur = :h')->setParameter('h', $humeur);
    }

    if ($q) {
        $qb->andWhere('LOWER(s.notesLibres) LIKE LOWER(:q)')
           ->setParameter('q', '%' . mb_strtolower(trim($q)) . '%');
    }

    // ✅ sécuriser sortDir
    $sortDir = strtoupper($sortDir) === 'ASC' ? 'ASC' : 'DESC';

    // ✅ sécuriser sortBy
    $allowedSortBy = ['dateSaisie', 'score'];
    if (!in_array($sortBy, $allowedSortBy, true)) {
        $sortBy = 'dateSaisie';
    }

    $qb->orderBy('s.' . $sortBy, $sortDir);

    // ✅ tie-breaker باش يكون الترتيب ثابت
    if ($sortBy !== 'dateSaisie') {
        $qb->addOrderBy('s.dateSaisie', 'DESC');
    } else {
        $qb->addOrderBy('s.id', 'DESC');
    }

    return $qb->getQuery()->getResult();
}
public function filterByObjectif(
    ObjectifSante $objectif,
    ?string $q,
    ?string $humeur,
    string $sortBy = 'dateSaisie',
    string $sortDir = 'DESC'
): array
{
    $qb = $this->createQueryBuilder('s')
        ->andWhere('s.objectif = :obj')
        ->setParameter('obj', $objectif);

    if ($humeur) {
        $qb->andWhere('s.humeur = :h')->setParameter('h', $humeur);
    }

    if ($q) {
        $qb->andWhere('LOWER(s.notesLibres) LIKE LOWER(:q)')
           ->setParameter('q', '%'.$q.'%');
    }

    // sécurité sort
    $allowedSortBy = ['dateSaisie', 'score'];
    if (!in_array($sortBy, $allowedSortBy, true)) $sortBy = 'dateSaisie';
    $sortDir = strtoupper($sortDir) === 'ASC' ? 'ASC' : 'DESC';

    $qb->orderBy('s.' . $sortBy, $sortDir);

    return $qb->getQuery()->getResult();
}

public function searchFrontSuivis(int $objectifId, ?string $q, ?string $humeur, string $sortDir = 'DESC'): array
{
    $qb = $this->createQueryBuilder('s')
        ->join('s.objectif', 'o')
        ->andWhere('o.id = :oid')
        ->setParameter('oid', $objectifId);

    if ($humeur) {
        $qb->andWhere('s.humeur = :h')->setParameter('h', $humeur);
    }

    if ($q) {
        $qb->andWhere('LOWER(s.notesLibres) LIKE LOWER(:q)')
           ->setParameter('q', '%'.$q.'%');
    }

    $sortDir = strtoupper($sortDir) === 'ASC' ? 'ASC' : 'DESC';
    $qb->orderBy('s.dateSaisie', $sortDir);

    return $qb->getQuery()->getResult();
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
