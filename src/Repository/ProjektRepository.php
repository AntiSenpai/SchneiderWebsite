<?php

namespace App\Repository;

use App\Entity\Projekt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projekt>
 *
 * @method Projekt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projekt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projekt[]    findAll()
 * @method Projekt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjektRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projekt::class);
    }

//    /**
//     * @return Projekt[] Returns an array of Projekt objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Projekt
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
