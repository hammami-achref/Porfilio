<?php

namespace App\Repository;

use App\Entity\NIVEAU;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NIVEAU|null find($id, $lockMode = null, $lockVersion = null)
 * @method NIVEAU|null findOneBy(array $criteria, array $orderBy = null)
 * @method NIVEAU[]    findAll()
 * @method NIVEAU[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NIVEAURepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NIVEAU::class);
    }

    // /**
    //  * @return NIVEAU[] Returns an array of NIVEAU objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NIVEAU
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
