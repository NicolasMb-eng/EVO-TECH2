<?php

namespace App\Repository;

use App\Entity\Produits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produits|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produits|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produits[]    findAll()
 * @method Produits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produits::class);
    }



     /**
      * Returns an array of Produits objects
      * @return Produits[]
     */

    public function findSearch(SearchData $search): array
    {
    $query= $this
        ->createQueryBuilder('p')
        ->select('c','p')
        ->join('p.idCategorie','c');
        if(!empty($search->min)){
            $query  = $query
                ->andWhere('p.prixProduit>=:min')
                ->setParamater('min',$search->min);
        }
        if(!empty($search->max)){
            $query  = $query
                ->andWhere('p.prixProduit<=:max')
                ->setParamater('max',$search->max);
        }
        if(!empty($search->categorie)){
            $query  = $query
                ->andWhere('c.idCategorie IN (:categorie')
                ->setParamater('categorie',$search->categorie);
        }
    }


    /*
    public function findOneBySomeField($value): ?Produits
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findByCategorie($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.idCategorie = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findByProduit($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.nomProduit LIKE :val')
            ->setParameter('val', '%'. $value . '%')
            ->getQuery()
            ->getResult()
            ;
    }
}
