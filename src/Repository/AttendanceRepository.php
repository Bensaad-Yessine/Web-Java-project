<?php

namespace App\Repository;

use App\Entity\Attendance;
use App\Entity\Seance;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Attendance>
 */
class AttendanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Attendance::class);
    }

    public function findBySeance(Seance $seance): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.seance = :seance')
            ->setParameter('seance', $seance)
            ->leftJoin('a.student', 's')
            ->addSelect('s')
            ->orderBy('a.scannedAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByStudent(User $student): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.student = :student')
            ->setParameter('student', $student)
            ->leftJoin('a.seance', 'se')
            ->addSelect('se')
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findOneBySeanceAndStudent(Seance $seance, User $student): ?Attendance
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.seance = :seance')
            ->andWhere('a.student = :student')
            ->setParameter('seance', $seance)
            ->setParameter('student', $student)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getStatsBySeance(Seance $seance): array
    {
        $result = $this->createQueryBuilder('a')
            ->select('a.status, COUNT(a.id) as cnt')
            ->andWhere('a.seance = :seance')
            ->setParameter('seance', $seance)
            ->groupBy('a.status')
            ->getQuery()
            ->getResult();

        $stats = ['PRESENT' => 0, 'LATE' => 0, 'ABSENT' => 0, 'REJECTED' => 0];
        foreach ($result as $row) {
            $stats[$row['status']] = (int) $row['cnt'];
        }
        return $stats;
    }
}
