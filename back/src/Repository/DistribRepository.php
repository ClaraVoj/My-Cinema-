<?php

namespace App\Repository;

use App\Entity\Distrib;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Distrib|null find($id, $lockMode = null, $lockVersion = null)
 * @method Distrib|null findOneBy(array $criteria, array $orderBy = null)
 * @method Distrib[]    findAll()
 * @method Distrib[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DistribRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Distrib::class);
    }

    // /**
    //  * @return Distrib[] Returns an array of Distrib objects
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
    public function findOneBySomeField($value): ?Distrib
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
