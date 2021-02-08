<?php

namespace App\Repository;

use App\Entity\CURSUSACADEMIQUE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CURSUSACADEMIQUE|null find($id, $lockMode = null, $lockVersion = null)
 * @method CURSUSACADEMIQUE|null findOneBy(array $criteria, array $orderBy = null)
 * @method CURSUSACADEMIQUE[]    findAll()
 * @method CURSUSACADEMIQUE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CURSUSACADEMIQUERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CURSUSACADEMIQUE::class);
    }

    // /**
    //  * @return CURSUSACADEMIQUE[] Returns an array of CURSUSACADEMIQUE objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CURSUSACADEMIQUE
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
