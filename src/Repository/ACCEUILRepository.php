<?php

namespace App\Repository;

use App\Entity\ACCEUIL;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ACCEUIL|null find($id, $lockMode = null, $lockVersion = null)
 * @method ACCEUIL|null findOneBy(array $criteria, array $orderBy = null)
 * @method ACCEUIL[]    findAll()
 * @method ACCEUIL[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ACCEUILRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ACCEUIL::class);
    }

    // /**
    //  * @return ACCEUIL[] Returns an array of ACCEUIL objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ACCEUIL
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
