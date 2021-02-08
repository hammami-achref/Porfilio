<?php

namespace App\Repository;

use App\Entity\PROFIL;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PROFIL|null find($id, $lockMode = null, $lockVersion = null)
 * @method PROFIL|null findOneBy(array $criteria, array $orderBy = null)
 * @method PROFIL[]    findAll()
 * @method PROFIL[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PROFILRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PROFIL::class);
    }

    // /**
    //  * @return PROFIL[] Returns an array of PROFIL objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PROFIL
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
