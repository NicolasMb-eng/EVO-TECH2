<?php

namespace App\Repository;

use App\Entity\CategorieRec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategorieRec|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieRec|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieRec[]    findAll()
 * @method CategorieRec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieRecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieRec::class);
    }

    // /**
    //  * @return CategorieRec[] Returns an array of CategorieRec objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategorieRec
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
