<?php

namespace App\Repository;

use App\Entity\PropositionReunion;
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

    /**
     * Find propositions with dynamic filters and sorting for AJAX listing.
     *
     * @param int $groupeId
     * @param string|null $search
     * @param string|null $status
     * @param string $sort
     * @param string $direction
     * @return PropositionReunion[]
     */
    public function findWithFilters(int $groupeId, ?string $search, ?string $status, string $sort = 'dateCreation', string $direction = 'DESC'): array
    {
        $qb = $this->createQueryBuilder('p')
            ->innerJoin('p.idGroupe', 'g')
            ->addSelect('g')
            ->andWhere('g.id = :groupeId')
            ->setParameter('groupeId', $groupeId);

        if ($search) {
            $qb->andWhere('LOWER(p.titre) LIKE :search OR LOWER(p.description) LIKE :search OR LOWER(g.nomProjet) LIKE :search')
               ->setParameter('search', '%' . mb_strtolower($search) . '%');
        }

        if ($status) {
            $qb->andWhere('p.status = :status')
               ->setParameter('status', $status);
        }

        // sanitize sort field
        $allowed = [
            'dateCreation' => 'p.dateCreation',
            'dateReunion'  => 'p.dateReunion',
            'propositionId'=> 'p.propositionId',
            'id'           => 'p.id'
        ];

        $field = $allowed[$sort] ?? $allowed['dateCreation'];
        $direction = strtoupper($direction) === 'ASC' ? 'ASC' : 'DESC';

        $qb->orderBy($field, $direction);

        return $qb->getQuery()->getResult();
    }

    //    /**
    //     * @return PropositionReunion[] Returns an array of PropositionReunion objects
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

    //    public function findOneBySomeField($value): ?PropositionReunion
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
