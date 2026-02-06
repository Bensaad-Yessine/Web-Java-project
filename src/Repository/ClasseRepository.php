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
     * Recherche et tri dynamique
     *
     * @param string|null $nom
     * @param string|null $sortField (nom | niveau | anneeuniversitaire)
     * @param string|null $sortOrder (asc | desc)
     * @return Classe[]
     */
    public function searchAndSort(?string $nom, ?string $sortField, ?string $sortOrder): array
    {
        $qb = $this->createQueryBuilder('c');

        // 🔍 Recherche par nom
        if ($nom) {
            $qb->andWhere('c.nom LIKE :nom')
               ->setParameter('nom', '%'.$nom.'%');
        }

        // 🔃 Tri dynamique
        $allowedFields = [
            'nom' => 'c.nom',
            'niveau' => 'c.niveau',
            'anneeuniversitaire' => 'c.anneeuniversitaire' // <-- met ici exactement le nom de ton attribut dans l'entité
        ];

        $allowedOrder = ['asc', 'desc'];

        if (isset($allowedFields[$sortField]) && in_array(strtolower($sortOrder), $allowedOrder)) {
            $qb->orderBy($allowedFields[$sortField], strtoupper($sortOrder));
        } else {
            $qb->orderBy('c.id', 'DESC'); // tri par défaut
        }

        return $qb->getQuery()->getResult();
    }
}
