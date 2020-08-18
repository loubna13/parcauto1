<?php

namespace App\Repository;

use App\Entity\Typecontrat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Typecontrat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typecontrat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typecontrat[]    findAll()
 * @method Typecontrat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypecontratRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typecontrat::class);
    }

    // /**
    //  * @return Typecontrat[] Returns an array of Typecontrat objects
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
    public function findOneBySomeField($value): ?Typecontrat
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
