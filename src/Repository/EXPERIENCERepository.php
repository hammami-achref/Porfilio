<?php

namespace App\Repository;

use App\Entity\EXPERIENCE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EXPERIENCE|null find($id, $lockMode = null, $lockVersion = null)
 * @method EXPERIENCE|null findOneBy(array $criteria, array $orderBy = null)
 * @method EXPERIENCE[]    findAll()
 * @method EXPERIENCE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EXPERIENCERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EXPERIENCE::class);
    }

    // /**
    //  * @return EXPERIENCE[] Returns an array of EXPERIENCE objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EXPERIENCE
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
