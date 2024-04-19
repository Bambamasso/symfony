<?php

namespace App\Repository;

use App\Entity\Categiry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categiry>
 *
 * @method Categiry|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categiry|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categiry[]    findAll()
 * @method Categiry[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategiryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categiry::class);
    }

//    /**
//     * @return Categiry[] Returns an array of Categiry objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Categiry
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
