<?php
/**
 * Created by PhpStorm.
 * User: arley
 * Date: 20/07/17
 * Time: 18:00
 */

namespace IFNMG\BaseBundle\Repository;


use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findNome($nome)
    {

        $qb = $this->createQueryBuilder('p');

        $qb
            ->where("p.name = :nome")
            ->setParameter('nome', $nome);


        return $qb
            ->getQuery()
            ->getResult();

    }
}