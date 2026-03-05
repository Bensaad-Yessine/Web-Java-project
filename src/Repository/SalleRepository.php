<?php

namespace App\Repository;

use App\Entity\Salle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Salle>
 */
class SalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Salle::class);
    }

    //    /**
    //     * @return Salle[] Returns an array of Salle objects
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

    //    public function findOneBySomeField($value): ?Salle
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findWithFilters(
        ?string $search = null,
        ?string $block = null,
        ?int $minCapacite = null,
        ?int $maxCapacite = null,
        string $sort = 'id',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('s');

        if ($search) {
            $qb->andWhere('s.name LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($block) {
            $qb->andWhere('s.block = :block')
               ->setParameter('block', $block);
        }

        if ($minCapacite) {
            $qb->andWhere('s.capacite >= :minCapacite')
               ->setParameter('minCapacite', $minCapacite);
        }

        if ($maxCapacite) {
            $qb->andWhere('s.capacite <= :maxCapacite')
               ->setParameter('maxCapacite', $maxCapacite);
        }

        $allowedSorts = ['id', 'name', 'block', 'number', 'capacite'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'id';
        }

        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
        $qb->orderBy('s.' . $sort, $direction);

        return $qb->getQuery()->getResult();
    }

    public function getDistinctBlocks(): array
    {
        return $this->createQueryBuilder('s')
            ->select('DISTINCT s.block')
            ->orderBy('s.block', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Return salles for a given block, grouped by étage.
     *
     * The result is an associative array where keys are étages (as strings)
     * and values are arrays of Salle objects sorted by name.
     */
    public function findByBlockGroupedByEtage(string $block): array
    {
        $salles = $this->createQueryBuilder('s')
            ->andWhere('s.block = :block')
            ->setParameter('block', $block)
            ->orderBy('s.etage', 'ASC')
            ->addOrderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();

        $grouped = [];
        foreach ($salles as $salle) {
            $etage = (string) $salle->getEtage();
            if (!isset($grouped[$etage])) {
                $grouped[$etage] = [];
            }
            $grouped[$etage][] = $salle;
        }

        return $grouped;
    }

    /**
     * Return blocks with aggregated statut counts.
     * Returned rows contain: bloc, total, libres, occupees, reservees.
     */
    public function getBlockStatistics(): array
    {
        // raw query is simpler than case expressions in DQL
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT block                          AS bloc,
                       COUNT(id)                     AS total
                FROM salle
                GROUP BY block';
        // we won't calculate libres/occupees here since statut is not stored
        // (availability is calculated separately in controller)
        return $conn->fetchAllAssociative($sql);
    }

    /**
     * Retrieve distinct étages with counts for a given bloc.
     * Each element: ['etage'=>0, 'total'=>5]
     */
    public function getEtagesForBlocStats(string $bloc): array
    {
        $qb = $this->createQueryBuilder('s')
            ->select('s.etage AS etage')
            ->addSelect('COUNT(s.id) AS total')
            ->andWhere('s.block = :bloc')
            ->setParameter('bloc', $bloc)
            ->groupBy('s.etage')
            ->orderBy('s.etage', 'ASC');

        return $qb->getQuery()->getArrayResult();
    }

    /**
     * Simple list of salles for a bloc ordered by étage,name.
     * Used by API to build grouped output.
     * @return Salle[]
     */
    public function getSallesByBlocOrdered(string $bloc): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.block = :bloc')
            ->setParameter('bloc', $bloc)
            ->orderBy('s.etage', 'ASC')
            ->addOrderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les salles disponibles pour un créneau donné
     * 
     * @param string|null $jour Jour de la semaine (Lundi, Mardi, etc.)
     * @param \DateTime|null $heureDebut Heure de début
     * @param \DateTime|null $heureFin Heure de fin
     * @param int|null $excludeSeanceId ID de la séance à exclure
     * @return Salle[] Salles disponibles
     */
    public function findAvailableRooms(
        ?string $jour = null,
        ?\DateTime $heureDebut = null,
        ?\DateTime $heureFin = null,
        ?int $excludeSeanceId = null
    ): array {
        $qb = $this->createQueryBuilder('s');

        // Si on a des contraintes de temps, exclure les salles déjà occupées
        if ($jour && $heureDebut && $heureFin) {
            // Sous-requête pour trouver les salles occupées
            $subQb = $this->_em->createQueryBuilder()
                ->select('IDENTITY(se.salle)')
                ->from('App\Entity\Seance', 'se')
                ->where('se.jour = :jour')
                ->andWhere('se.heureDebut < :heureFin')
                ->andWhere('se.heureFin > :heureDebut');
            
            if ($excludeSeanceId) {
                $subQb->andWhere('se.id != :excludeSeanceId')
                       ->setParameter('excludeSeanceId', $excludeSeanceId);
            }

            $occupiedRoomIds = $subQb->setParameter('jour', $jour)
                                     ->setParameter('heureDebut', $heureDebut)
                                     ->setParameter('heureFin', $heureFin)
                                     ->getQuery()
                                     ->getScalarResult();

            $occupiedIds = array_map(fn($row) => $row[1], $occupiedRoomIds);

            if (!empty($occupiedIds)) {
                $qb->andWhere('s.id NOT IN (:occupiedIds)')
                   ->setParameter('occupiedIds', $occupiedIds);
            }
        }

        return $qb->orderBy('s.capacite', 'ASC')
                 ->getQuery()
                 ->getResult();
    }

    /**
     * Retourne les salles avec leur taux d'occupation moyen
     * 
     * @param int $limit Nombre de résultats à retourner
     * @return array
     */
    public function findMostUsedRooms(int $limit = 10): array
    {
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = 'SELECT s.id, 
                       s.name, 
                       s.capacite,
                       COUNT(se.id) as total_seances,
                       AVG(a.attendance_count) as avg_attendance
                FROM salle s
                LEFT JOIN seance se ON s.id = se.salle_id
                LEFT JOIN (
                    SELECT seance_id, COUNT(*) as attendance_count
                    FROM attendance 
                    WHERE status IN (\'PRESENT\', \'LATE\')
                    GROUP BY seance_id
                ) a ON se.id = a.seance_id
                GROUP BY s.id, s.name, s.capacite
                HAVING total_seances > 0
                ORDER BY total_seances DESC
                LIMIT :limit';

        $stmt = $conn->executeQuery($sql, ['limit' => $limit]);
        
        return $stmt->fetchAllAssociative();
    }

    /**
     * Statistiques d'utilisation des salles par bloc
     * 
     * @return array
     */
    public function getUsageStatsByBloc(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = 'SELECT s.block,
                       COUNT(DISTINCT s.id) as total_salles,
                       COUNT(DISTINCT se.id) as total_seances,
                       AVG(s.capacite) as avg_capacity
                FROM salle s
                LEFT JOIN seance se ON s.id = se.salle_id
                GROUP BY s.block
                ORDER BY total_seances DESC';

        $stmt = $conn->executeQuery($sql);
        
        return $stmt->fetchAllAssociative();
    }
}

