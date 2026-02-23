<?php

namespace App\Repository;

use App\Entity\Classe;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    //    /**
    //     * @return User[] Returns an array of User objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('u.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?User
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findUsersByClasse(Classe $classe): array
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.classe = :classe')
            ->setParameter('classe', $classe)
            ->getQuery()
            ->getResult();
    }

    public function findWithFilters(
        ?string $search = null,
        ?string $role = null,
        ?bool $isVerified = null,
        string $sort = 'id',
        string $direction = 'ASC'
    ): array {
        $qb = $this->createQueryBuilder('u')
            ->leftJoin('u.classe', 'c');

        if ($search) {
                $qb->andWhere('u.nom LIKE :search OR u.prenom LIKE :search OR u.email LIKE :search OR u.numTel LIKE :search OR c.nom LIKE :search')
                    ->setParameter('search', '%' . $search . '%');
        }

        if ($role) {
            if ($role === 'admin') {
                $qb->andWhere('u.roles LIKE :role')
                   ->setParameter('role', '%ROLE_ADMIN%');
            } elseif ($role === 'user') {
                $qb->andWhere('u.roles NOT LIKE :adminRole')
                   ->setParameter('adminRole', '%ROLE_ADMIN%');
            }
        }

        if ($isVerified !== null) {
            $qb->andWhere('u.isVerified = :verified')
               ->setParameter('verified', $isVerified);
        }

        $allowedSorts = ['id', 'nom', 'prenom', 'email', 'DateDeNaissance', 'sexe'];
        if (in_array($sort, $allowedSorts)) {
            $qb->orderBy('u.' . $sort, strtoupper($direction));
        }

        return $qb->getQuery()->getResult();
    }

}
