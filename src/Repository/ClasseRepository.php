<?php

namespace App\Repository;

use App\Entity\Classe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Classe>
 */
class ClasseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Classe::class);
    }

    /**
     * Find classes with search, filter, and sort
     */
    public function findWithFilters(
        ?string $search = null,
        ?string $niveau = null,
        ?string $filiere = null,
        string $sort = 'id',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('c');

        // Search in nom, niveau, description, filiere
        if ($search) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('LOWER(c.nom)', ':search'),
                    $qb->expr()->like('LOWER(c.niveau)', ':search'),
                    $qb->expr()->like('LOWER(c.description)', ':search'),
                    $qb->expr()->like('LOWER(c.filiere)', ':search')
                )
            )->setParameter('search', '%' . strtolower($search) . '%');
        }

        // Filter by niveau
        if ($niveau) {
            $qb->andWhere('c.niveau = :niveau')
                ->setParameter('niveau', $niveau);
        }

        // Filter by filiere
        if ($filiere) {
            $qb->andWhere('c.filiere = :filiere')
                ->setParameter('filiere', $filiere);
        }

        // Sort
        $allowedSorts = ['id', 'nom', 'niveau', 'filiere', 'anneeuniversitaire'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'id';
        }
        
        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
        $qb->orderBy('c.' . $sort, $direction);

        return $qb->getQuery()->getResult();
    }

    /**
     * Get distinct niveaux
     */
    public function getDistinctNiveaux(): array
    {
        return $this->createQueryBuilder('c')
            ->select('DISTINCT c.niveau')
            ->orderBy('c.niveau', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get distinct filieres
     */
    public function getDistinctFilieres(): array
    {
        return $this->createQueryBuilder('c')
            ->select('DISTINCT c.filiere')
            ->where('c.filiere IS NOT NULL')
            ->orderBy('c.filiere', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
