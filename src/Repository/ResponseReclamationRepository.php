<?php

namespace App\Repository;

use App\Entity\ResponseReclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResponseReclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResponseReclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResponseReclamation[]    findAll()
 * @method ResponseReclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResponseReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResponseReclamation::class);
    }

    // /**
    //  * @return ResponseReclamation[] Returns an array of ResponseReclamation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    public function findOneByReclamation($value): ?ResponseReclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.reclamation = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
    /*
    public function findOneBySomeField($value): ?ResponseReclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}