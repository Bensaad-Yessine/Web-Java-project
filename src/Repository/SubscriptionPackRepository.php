<?php

namespace App\Repository;

use App\Entity\SubscriptionPack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SubscriptionPackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubscriptionPack::class);
    }

    public function findAllActive(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('p.price', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
