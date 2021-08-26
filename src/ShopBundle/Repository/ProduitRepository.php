<?php

namespace ShopBundle\Repository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends \Doctrine\ORM\EntityRepository
{

    public function findEntitiesByCat($str)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM ShopBundle:Produit p
                WHERE p.nom LIKE :str'
            )
            ->setParameter('str', '%' . $str . '%')
            ->getResult();
    }
}