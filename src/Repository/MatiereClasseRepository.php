<?php

namespace App\Repository;
use App\Entity\Classe;
use App\Entity\MatiereClasse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MatiereClasse>
 */
class MatiereClasseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatiereClasse::class);
    }

    /**
     * 🔍 Recherche et tri dynamique des matières
     */
    public function searchAndSort(?string $nom = null, ?string $sortField = null, ?string $sortOrder = null): array
    {
        $qb = $this->createQueryBuilder('m');

        // 🔍 Recherche par nom
        if ($nom) {
            $qb->andWhere('LOWER(m.nom) LIKE :nom')
               ->setParameter('nom', '%' . strtolower($nom) . '%');
        }

        // 🔃 Tri dynamique
        $allowedFields = [
            'nom' => 'm.nom',
            'coefficient' => 'm.coefficient',
            'chargehoraire' => 'm.chargehoraire',
            'scorecomplexite' => 'm.scorecomplexite',
            'id' => 'm.id'
        ];

        $allowedOrder = ['asc', 'desc'];

        if (isset($allowedFields[$sortField]) && in_array(strtolower($sortOrder), $allowedOrder)) {
            $qb->orderBy($allowedFields[$sortField], strtoupper($sortOrder));
        } else {
            $qb->orderBy('m.id', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Find matiere classe with search, filter, and sort
     */
    public function findWithFilters(
        ?string $search = null,
        ?int $classeId = null,
        ?int $scoreMin = null,
        ?int $scoreMax = null,
        string $sort = 'id',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('m');

        if (!empty($search)) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('LOWER(m.nom)', ':search'),
                    $qb->expr()->like('LOWER(m.description)', ':search')
                )
            )
            ->setParameter('search', '%' . strtolower($search) . '%');
        }

        if ($classeId) {
            $qb->innerJoin('m.classes', 'c')
                ->andWhere('c.id = :classeId')
                ->setParameter('classeId', $classeId);
        }

        if ($scoreMin !== null) {
            $qb->andWhere('m.scorecomplexite >= :scoreMin')
                ->setParameter('scoreMin', $scoreMin);
        }

        if ($scoreMax !== null) {
            $qb->andWhere('m.scorecomplexite <= :scoreMax')
                ->setParameter('scoreMax', $scoreMax);
        }

        $allowedSorts = ['id', 'nom', 'coefficient', 'chargehoraire', 'scorecomplexite'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'id';
        }
        
        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
        $qb->orderBy('m.' . $sort, $direction);

        return $qb->getQuery()->getResult();
    }

    /**
     * Find matieres by classe with search and sort
     */
    public function findByClasseWithSearch(
        Classe $classe,
        ?string $search = null,
        string $sort = 'id',
        string $direction = 'asc'
    ): array {
        $qb = $this->createQueryBuilder('m')
            ->innerJoin('m.classes', 'c')
            ->andWhere('c.id = :classeId')
            ->setParameter('classeId', $classe->getId());

        if ($search) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('LOWER(m.nom)', ':search'),
                    $qb->expr()->like('LOWER(m.description)', ':search')
                )
            )->setParameter('search', '%' . strtolower($search) . '%');
        }

        $allowedSorts = ['id', 'nom', 'coefficient', 'chargehoraire', 'scorecomplexite'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'id';
        }
        
        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
        $qb->orderBy('m.' . $sort, $direction);

        return $qb->getQuery()->getResult();
    }

    /**
     * Get score complexity range
     */
    public function getScoreComplexiteRange(): array
    {
        $result = $this->createQueryBuilder('m')
            ->select('MIN(m.scorecomplexite) as min_score, MAX(m.scorecomplexite) as max_score')
            ->getQuery()
            ->getResult();

        return $result[0] ?? ['min_score' => 1, 'max_score' => 10];
    }
}


