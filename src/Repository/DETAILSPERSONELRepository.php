<?php

namespace App\Repository;

use App\Entity\DETAILSPERSONEL;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DETAILSPERSONEL|null find($id, $lockMode = null, $lockVersion = null)
 * @method DETAILSPERSONEL|null findOneBy(array $criteria, array $orderBy = null)
 * @method DETAILSPERSONEL[]    findAll()
 * @method DETAILSPERSONEL[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DETAILSPERSONELRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DETAILSPERSONEL::class);
    }

    // /**
    //  * @return DETAILSPERSONEL[] Returns an array of DETAILSPERSONEL objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DETAILSPERSONEL
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
