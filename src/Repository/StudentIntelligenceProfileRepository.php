<?php

namespace App\Repository;

use App\Entity\StudentIntelligenceProfile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
/**
 * @extends ServiceEntityRepository<StudentIntelligenceProfile>
 */
class StudentIntelligenceProfileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudentIntelligenceProfile::class);
    }
    // =================================================================

    public function findLastByUser(User $user): ?StudentIntelligenceProfile
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.user = :user')
            ->setParameter('user', $user)
            ->orderBy('p.analyzedAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    } 
    

}
