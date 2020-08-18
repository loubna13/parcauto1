<?php

namespace App\Entity;

use App\Entity\Visitetechnique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Visitetechnique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Visitetechnique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Visitetechnique[]    findAll()
 * @method Visitetechnique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisitetechniqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Visitetechnique::class);
    }

    // /**
    //  * @return Visitetechnique[] Returns an array of Visitetechnique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Visitetechnique
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}