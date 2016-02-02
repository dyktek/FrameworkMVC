<?php

namespace Books\Controller;

use Simplex\App;
use Books\Model\Books;

class BooksController extends App
{
    public function indexAction($page, $test)
    {
        $em = $this->getEntityManager();

        $books = $em->getRepository('Books\Model\Books')->findAll();

        return $this->render('Books/View/list.html.twig', array(
            'books' => $books
        ));
    }

    public function editAction($id)
    {
        return $this->render('Books/View/edit.html.twig');
    }

}