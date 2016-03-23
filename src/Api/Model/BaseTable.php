<?php

namespace Api\Model;


use Doctrine\ORM\EntityManager;

class BaseTable
{
    protected $em;
    protected $qb;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->qb = $this->em->createQueryBuilder();
    }
}