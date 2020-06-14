<?php

namespace App\Repository;

use App\Entity\DisciplineSteps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DisciplineSteps|null find($id, $lockMode = null, $lockVersion = null)
 * @method DisciplineSteps|null findOneBy(array $criteria, array $orderBy = null)
 * @method DisciplineSteps[]    findAll()
 * @method DisciplineSteps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DisciplineStepsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DisciplineSteps::class);
    }

    // /**
    //  * @return DisciplineSteps[] Returns an array of DisciplineSteps objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DisciplineSteps
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
