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
    public function findOverlappingTasks(\DateTime $start, \DateTime $end, ?int $excludeId = null): array
    {
        $qb = $this->createQueryBuilder('t');

        // Basic overlap condition
        $qb->where('t.dateDebut < :end')
           ->andWhere('t.dateFin > :start')
           ->setParameter('start', $start)
           ->setParameter('end', $end);

        // If editing an existing task, exclude it from the check
        if ($excludeId) {
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


    // SEARCH : 
    public function searchByTitre(?string $titre)
    {
        $qb = $this->createQueryBuilder('t');

        //search by titre if provided
        if ($titre) {
            $qb->andWhere('t.titre Like :titre')
            ->setParameter('titre', '%'.$titre.'%'); //partial match
        }

        // order by dateDebut ascending
        $qb->orderBy('t.dateDebut', 'ASC');

        return $qb->getQuery()->getResult();
    }


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


}
