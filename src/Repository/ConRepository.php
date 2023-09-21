<?php

namespace App\Repository;

use App\Entity\Con;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Con>
 *
 * @method Con|null find($id, $lockMode = null, $lockVersion = null)
 * @method Con|null findOneBy(array $criteria, array $orderBy = null)
 * @method Con[]    findAll()
 * @method Con[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Con::class);
    }

//    /**
//     * @return Con[] Returns an array of Con objects
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

//    public function findOneBySomeField($value): ?Con
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
