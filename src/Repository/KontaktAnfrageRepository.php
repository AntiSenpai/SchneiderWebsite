<?php

namespace App\Repository;

use App\Entity\KontaktAnfrage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KontaktAnfrage>
 *
 * @method KontaktAnfrage|null find($id, $lockMode = null, $lockVersion = null)
 * @method KontaktAnfrage|null findOneBy(array $criteria, array $orderBy = null)
 * @method KontaktAnfrage[]    findAll()
 * @method KontaktAnfrage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KontaktAnfrageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KontaktAnfrage::class);
    }

//    /**
//     * @return KontaktAnfrage[] Returns an array of KontaktAnfrage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('k.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?KontaktAnfrage
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
