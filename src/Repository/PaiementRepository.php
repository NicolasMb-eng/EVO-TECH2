<?php

namespace App\Repository;

use App\Entity\Paiement;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Paiement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paiement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paiement[]    findAll()
 * @method Paiement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaiementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paiement::class);
    }

    /**
     * @param User $user
     * @return int|mixed|string
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function countSoldePayment(User $user)
    {
        return $this->createQueryBuilder('p')
            ->select('sum(p.price)')
            ->andWhere('p.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult()
            ;
    }
}