<?php

namespace App\Repository;

use App\Entity\Listservices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Listservices|null find($id, $lockMode = null, $lockVersion = null)
 * @method Listservices|null findOneBy(array $criteria, array $orderBy = null)
 * @method Listservices[]    findAll()
 * @method Listservices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListservicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Listservices::class);
    }

    // /**
    //  * @return Listservices[] Returns an array of Listservices objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Listservices
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
