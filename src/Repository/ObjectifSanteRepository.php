<?php

namespace App\Repository;

use App\Entity\ObjectifSante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ObjectifSanteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObjectifSante::class);
    }
   public function findFiltered(string $type, string $priorite, string $q, string $sort, string $dir): array
{
    $qb = $this->createQueryBuilder('o');

    if ($type !== 'ALL') {
        $qb->andWhere('o.type = :type')->setParameter('type', $type);
    }

    if ($priorite !== 'ALL') {
        $qb->andWhere('o.priorite = :priorite')->setParameter('priorite', $priorite);
    }

    if (trim($q) !== '') {
        $qb->andWhere('LOWER(o.titre) LIKE :q')
           ->setParameter('q', '%' . mb_strtolower(trim($q)) . '%');
    }

    // ✅ Tri sécurisé (whitelist)
    if ($sort === 'priorite') {
        // HAUTE > MOYENNE > BASSE
        $qb->addSelect("
            CASE 
                WHEN o.priorite = 'HAUTE' THEN 3
                WHEN o.priorite = 'MOYENNE' THEN 2
                WHEN o.priorite = 'BASSE' THEN 1
                ELSE 0
            END AS HIDDEN prioOrder
        ")->orderBy('prioOrder', $dir)
          ->addOrderBy('o.dateDebut', 'DESC'); // secondaire
    } else {
        // tri par dateDebut (ou dateFin si tu veux)
        $allowedSorts = ['dateDebut', 'dateFin', 'id'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'dateDebut';
        }
        $qb->orderBy('o.' . $sort, $dir);
    }

    return $qb->getQuery()->getResult();
}


}
