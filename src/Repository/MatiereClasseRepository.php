<?php

namespace App\Repository;

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
     * Recherche et tri dynamique pour MatiereClasse
     *
     * @param string|null $search (recherche sur coefficient, chargehoraire, scorecomplexite)
     * @param string|null $sortField (coefficient | chargehoraire | scorecomplexite | classe)
     * @param string|null $sortOrder (asc | desc)
     * @return MatiereClasse[]
     */
    public function searchAndSort(?string $search, ?string $sortField, ?string $sortOrder): array
    {
        $qb = $this->createQueryBuilder('m')
            ->leftJoin('m.classe', 'c')
            ->addSelect('c');

        // 🔍 Recherche par valeur numérique ou classe
        if ($search) {
            $qb->andWhere(
                $qb->expr()->orX(
                    'm.coefficient LIKE :search',
                    'm.chargehoraire LIKE :search',
                    'm.scorecomplexite LIKE :search',
                    'c.nom LIKE :search'
                )
            )
            ->setParameter('search', '%'.$search.'%');
        }

        // 🔃 Tri dynamique
        $allowedFields = [
            'coefficient' => 'm.coefficient',
            'chargehoraire' => 'm.chargehoraire',
            'scorecomplexite' => 'm.scorecomplexite',
            'classe' => 'c.nom'
        ];

        $allowedOrder = ['asc', 'desc'];

        if (isset($allowedFields[$sortField]) && in_array(strtolower($sortOrder), $allowedOrder)) {
            $qb->orderBy($allowedFields[$sortField], strtoupper($sortOrder));
        } else {
            $qb->orderBy('m.id', 'DESC'); // tri par défaut
        }

        return $qb->getQuery()->getResult();
    }
}
