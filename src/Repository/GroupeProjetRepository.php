<?php

namespace App\Repository;

use App\Entity\GroupeProjet;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GroupeProjet>
 */
class GroupeProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupeProjet::class);
    }

    /**
     * Groupes dont l'utilisateur fait partie (un membre ne voit que ses groupes).
     *
     * @return GroupeProjet[]
     */
    public function findByMember(User $user): array
    {
        return $this->createQueryBuilder('g')
            ->innerJoin('g.idUser', 'u')
            ->andWhere('u.id = :userId')
            ->setParameter('userId', $user->getId())
            ->orderBy('g.CreatedAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return GroupeProjet[] Returns an array of GroupeProjet objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('g.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?GroupeProjet
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    /**
     * Finds groups based on filters.
     */
    public function findWithFilters(
        ?string $search = null,
        ?string $matiere = null,
        ?string $statut = null,
        string $sort = 'id',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('g');

        if ($search) {
            $qb->andWhere('g.nomProjet LIKE :search OR g.description LIKE :search OR g.matiere LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($matiere) {
            $qb->andWhere('g.matiere = :matiere')
               ->setParameter('matiere', $matiere);
        }

        if ($statut) {
            $qb->andWhere('g.statut = :statut')
               ->setParameter('statut', $statut);
        }

        $validSorts = ['id', 'nomProjet', 'matiere', 'statut', 'nbrMembre', 'CreatedAt'];
        if (in_array($sort, $validSorts)) {
            $dbSort = $sort;
            // Map sort keys to DB fields if necessary
            $qb->orderBy('g.' . $dbSort, strtoupper($direction));
        }

        return $qb->getQuery()->getResult();
    }
}
