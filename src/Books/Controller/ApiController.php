<?php

namespace Books\Controller;

use Simplex\App;

class ApiController extends App
{
    public function getBooksAction()
    {
//        $em = $this->getEntityManager();
//
//        $books = $em->getRepository('Books\Model\Books')->findAll();
//
//        $newBooks = [];
//
//        foreach ($books as $book) {
//            $newBooks[] = $book->toArray();
//        }

        return $this->renderAjax([]);


    }


}