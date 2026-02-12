<?php

namespace App\Repository;

use App\Entity\Tache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tache>
 *
 * Repository for Tache entity.
 * Contains custom queries and task-specific logic.
 */
class TacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tache::class);
    }

    // =================================================================
    // CUSTOM METHODS
    // =================================================================

    /**
     * Find tasks that overlap with a given start and end datetime.
     * 
     * Useful for enforcing "no overlapping tasks" rule per student.
     *
     * @param \DateTime $start Start of the interval to check
     * @param \DateTime $end   End of the interval to check
     * @param int|null $excludeId Optional: exclude a task ID (useful for edit)
     * @return Tache[] Returns an array of overlapping Tache objects
     */
    
    public function findOverlappingTasks(\DateTime $start, \DateTime $end, int $userId, ?int $excludeId = null): array 
    {
        $qb = $this->createQueryBuilder('t');

        // Overlap condition
        $qb->where('t.dateDebut < :end')
        ->andWhere('t.dateFin > :start')
        ->setParameter('start', $start)
        ->setParameter('end', $end);

        // Filter by user
        $qb->andWhere('t.user = :userId')
        ->setParameter('userId', $userId);

        // Exclude current task if editing
        if ($excludeId !== null) {
            $qb->andWhere('t.id != :excludeId')
            ->setParameter('excludeId', $excludeId);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Optionally: find tasks for a specific student
     * (assuming you later add a ManyToOne relation Tache->Etudiant)
     *
     * @param int $etudiantId
     * @return Tache[]
     */
    public function findTasksByEtudiant(int $etudiantId): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.etudiant = :etudiantId')
            ->setParameter('etudiantId', $etudiantId)
            ->orderBy('t.dateDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Optional: get tasks within a specific time range
     *
     * @param \DateTime $start
     * @param \DateTime $end
     * @return Tache[]
     */



    public function findTasksInInterval(\DateTime $start, \DateTime $end): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.dateDebut >= :start')
            ->andWhere('t.dateFin <= :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('t.dateDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // SEARCH : 
    public function searchByTitre(?string $titre): array
    {
        if (!$titre) {
            // Return empty array if nothing is searched
            return [];
        }

        $qb = $this->createQueryBuilder('t')
            ->where('t.titre LIKE :titre')
            ->setParameter('titre', '%' . $titre . '%');
        return $qb->getQuery()->getResult();
    }

    //filter by user email
    public function searchByUserEmail(?string $email): array
    {
        if (!$email) {
            // If empty input, return empty array to prevent showing all tasks
            return [];
        }

        $qb = $this->createQueryBuilder('t')
            ->join('t.user', 'u')                 // join tasks to user
            ->where('LOWER(u.email) LIKE :email') // make search case-insensitive
            ->setParameter('email', '%' . strtolower($email) . '%')
            ->orderBy('t.dateDebut', 'ASC');

        return $qb->getQuery()->getResult();
    }

    // src/Repository/TacheRepository.php
    public function searchAjax(?string $titre, ?string $email, string $sort = 'desc', ?string $type = null, ?string $statut = null, ?string $priorite = null): array
    {
        $qb = $this->createQueryBuilder('t')
            ->leftJoin('t.user', 'u')
            ->addSelect('u');

        if ($titre) {
            $qb->andWhere('t.titre LIKE :titre')
                ->setParameter('titre', '%' . $titre . '%');
        }

        if ($email) {
            $qb->andWhere('LOWER(u.email) LIKE :email')
                ->setParameter('email', '%' . mb_strtolower($email) . '%');
        }

        if ($type) {
            $qb->andWhere('t.type = :type')
                ->setParameter('type', $type);
        }

        if ($statut) {
            $qb->andWhere('t.statut = :statut')
                ->setParameter('statut', $statut);
        }

        if ($priorite) {
            $qb->andWhere('t.priorite = :priorite')
                ->setParameter('priorite', $priorite);
        }

        // Tri sécurisé
        $sort = strtolower($sort) === 'asc' ? 'ASC' : 'DESC';
        $qb->orderBy('t.dateDebut', $sort);

        return $qb->getQuery()->getResult();
    }


}
