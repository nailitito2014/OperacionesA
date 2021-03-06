<?php

namespace App\Repository;

use App\Entity\TipoServicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TipoServicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoServicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoServicio[]    findAll()
 * @method TipoServicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoServicioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoServicio::class);
    }
     public function tiposServicioOrdenadosDESC()
    {
        return $this->createQueryBuilder('ts')
            //->andWhere('c.exampleField = :val')
            //->setParameter('val', $value)
            ->orderBy('ts.fecha', 'DESC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult();     
    }

    // /**
    //  * @return TipoServicio[] Returns an array of TipoServicio objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TipoServicio
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
