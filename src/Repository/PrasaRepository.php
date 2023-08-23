<?php

namespace App\Repository;

use App\Entity\Prasa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prasa>
 *
 * @method Prasa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prasa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prasa[]    findAll()
 * @method Prasa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrasaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prasa::class);
    }

//    /**
//     * @return Prasa[] Returns an array of Prasa objects
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

//    public function findOneBySomeField($value): ?Prasa
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
