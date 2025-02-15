<?php

namespace App\Repository;

use App\Entity\Filier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Filier>
 *
 * @method Filier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Filier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Filier[]    findAll()
 * @method Filier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Filier::class);
    }

//    /**
//     * @return Filier[] Returns an array of Filier objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Filier
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
