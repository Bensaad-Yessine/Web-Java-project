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
     * All active groups for a given matière that the user has NOT joined yet.
     *
     * @return GroupeProjet[]
     */
    public function findByMatiereForMatching(string $matiere, User $user): array
    {
        $groups = $this->createQueryBuilder('g')
            ->where('g.matiere = :matiere')
            ->andWhere('g.statut = :statut')
            ->setParameter('matiere', $matiere)
            ->setParameter('statut', 'Actif')
            ->orderBy('g.CreatedAt', 'DESC')
            ->getQuery()
            ->getResult();

        // Exclude groups the user already belongs to
        return array_values(array_filter($groups, static fn(GroupeProjet $g) => !$g->getIdUser()->contains($user)));
    }

    /**
     * All distinct matieres used across all groups.
     *
     * @return string[]
     */
    public function findDistinctMatieres(): array
    {
        $rows = $this->createQueryBuilder('g')
            ->select('g.matiere')
            ->where('g.matiere IS NOT NULL')
            ->groupBy('g.matiere')
            ->orderBy('g.matiere', 'ASC')
            ->getQuery()
            ->getScalarResult();

        return array_column($rows, 'matiere');
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
}
