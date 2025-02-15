<?php

namespace App\Repository;

use App\Entity\Ensiegnant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ensiegnant>
 *
 * @method Ensiegnant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ensiegnant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ensiegnant[]    findAll()
 * @method Ensiegnant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnsiegnantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ensiegnant::class);
    }

//    /**
//     * @return Ensiegnant[] Returns an array of Ensiegnant objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Ensiegnant
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
