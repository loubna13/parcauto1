<?php

namespace App\Repository;

use App\Entity\Typecarburant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Typecarburant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typecarburant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typecarburant[]    findAll()
 * @method Typecarburant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypecarburantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typecarburant::class);
    }

    // /**
    //  * @return Typecarburant[] Returns an array of Typecarburant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Typecarburant
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
