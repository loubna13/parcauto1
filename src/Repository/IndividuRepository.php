<?php

namespace App\Repository;
use App\Entity\Individu;
use App\Entity\Vehicule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Individu|null find($id, $lockMode = null, $lockVersion = null)
 * @method Individu|null findOneBy(array $criteria, array $orderBy = null)
 * @method Individu[]    findAll()
 * @method Individu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IndividuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Individu::class);
    }
    

    // /**
    //  * @return Individu[] Returns an array of Individu objects
    //  */
    
    public function findByName($nom,$prenom)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.nomindividu LIKE :nom')
            ->setParameter('nom', $nom)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;

        return $this->createQueryBuilder('q')
            ->andWhere('q.prenomindividu LIKE :prenom')
            ->setParameter('prenom', $prenom)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
        
    }
    public function findByField($immatriculationvehicule)
    {
        
        return $this->createQueryBuilder('q')
        ->andWhere('q.immatriculationvehicule.vehicule LIKE :immatriculationvehicule')
        ->setParameter('immatriculationvehicule', $immatriculationvehicule)
        ->setMaxResults(1)
        ->getQuery()
        ->getResult()
    ;
        
    }
    
    

    /*
    public function findOneBySomeField($value): ?Individu
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
