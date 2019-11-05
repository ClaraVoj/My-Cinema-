<?php

namespace App\Repository;

use App\Entity\FichePersonne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FichePersonne|null find($id, $lockMode = null, $lockVersion = null)
 * @method FichePersonne|null findOneBy(array $criteria, array $orderBy = null)
 * @method FichePersonne[]    findAll()
 * @method FichePersonne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichePersonneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FichePersonne::class);
    }

    // /**
    //  * @return FichePersonne[] Returns an array of FichePersonne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FichePersonne
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
