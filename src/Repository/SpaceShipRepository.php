<?php

namespace App\Repository;

use App\Entity\SpaceShip;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SpaceShip|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpaceShip|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpaceShip[]    findAll()
 * @method SpaceShip[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpaceShipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpaceShip::class);
    }

    // /**
    //  * @return SpaceShip[] Returns an array of SpaceShip objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SpaceShip
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
