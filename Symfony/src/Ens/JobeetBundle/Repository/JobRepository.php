<?php

namespace Ens\JobeetBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * JobRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JobRepository extends EntityRepository
{

    public function getActiveJobs($category_id = null , $max = null , $offset = null)
    {
      //  $date = date('Y-m-d H:i:s',time());

        $query = $this->createQueryBuilder('j')
                        ->where('j.expires_at > :date')
                        ->setParameter('date',date('Y-m-d H:i:s',time()))
                        ->orderBy('j.expires_at','DESC');
        if($category_id!=null)
        {
            $query->andWhere('j.category  = :category_id')
                    ->setParameter('category_id',$category_id);
        }
        if($offset!=null)
        {
            $query->setFirstResult($offset);
        }
        if($max)
        {
            $query->setMaxResults($max);
        }
        $qb= $query->getQuery();
        return $qb->getResult();

    }

    public function getActiveJob($id)
    {
       // $date = date('Y-m-d H:i:s',time());
        $qery = $this->createQueryBuilder('j')
                     ->where('j.id = :id')
                     ->setParameter('id',$id)
                     ->andWhere('j.expires_at > :date')
                     ->setParameter('date',date('Y-m-d H:i:s',time()))
                      ->setMaxResults(1)
                       ->getQuery();

        try{
            $job = $qery->getSingleResult();

        }
        catch(\Doctrine\ORM\NoResultException $ex)
        {
            $job=null;

        }
        return $job;
    }

    public function countActiveJobs($category_id = null)
    {
       // $date = date('Y-m-d H:i:s',time());
        $query = $this->createQueryBuilder('j')
                       ->select('count(j.id)')
                        ->where('j.expires_at > :date')
                        ->setParameter('date',date('Y-m-d H:i:s',time()));
        if($category_id)
        {
            $query->andWhere('j.category = :category_id')
                   ->setParameter('category_id',$category_id);
        }
        $qb = $query->getQuery();
        return $qb->getSingleScalarResult();
    }
    public function cleanUp($time)
    {
      $query=  $this->createQueryBuilder('j')
              ->delete()
              ->where('j.expires_at > :date - ( 86400*'.$time.')')
              ->setParameter('date',date('YY-mm-dd H:i:s',time() ));
      $qb = $query->getQuery();
      return $qb->execute();

    }
    public function findOneByToken($token)
    {
        $query = $this->createQueryBuilder('j')
                       ->where('j.token = :token')
                        ->setParameter('token',$token);
        $qb = $query->getQuery();
        return $qb->getSingleResult();
    }
    public function findMaThe($mathe)
    {
        $query = $this->createQueryBuilder('j')
                       ->where('j.mathe = :mathe')
                        ->setParameter('mathe',$mathe);
        $qb= $query->getQuery();
        return $qb->getSingleResult();
    }




}
