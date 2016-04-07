<?php

namespace Api\Model;

use Doctrine\ORM\AbstractQuery;


class UsersTable extends BaseTable
{

    public function checkUser($email)
    {
        $q = $this->qb->select('usr')
            ->from('Api\Model\Users', 'usr')
            ->where('usr.usrEmail = :email')
            ->setParameter('email', $email);

        return $q->getQuery()->getOneOrNullResult(AbstractQuery::HYDRATE_ARRAY);
    }
}