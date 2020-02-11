<?php

namespace App\Repository;

use App\Entity\Associado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Associado|null find($id, $lockMode = null, $lockVersion = null)
 * @method Associado|null findOneBy(array $criteria, array $orderBy = null)
 * @method Associado[]    findAll()
 * @method Associado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssociadoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Associado::class);
    }

    // /**
    //  * @return Associado[] Returns an array of Associado objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Associado
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
