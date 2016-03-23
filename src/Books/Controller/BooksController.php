<?php

namespace Books\Controller;

use Doctrine\ORM\Internal\Hydration\ArrayHydrator;
use Simplex\App;
use Books\Model\Books;
use Api\Model\ArticlesTable;


class BooksController extends App
{
    public function indexAction($page, $test)
    {
//        $em = $this->getEntityManager();
//
//        $books = $em->getRepository('Books\Model\Books')->findAll();


//        $articles = new ArticlesTable($this->getEntityManager());
//
//        $result = $articles->getArticles(array(
//            'categoryId' => 2
//        ));
//
//        echo '<pre>';
//        print_r($result);

        if ($this->isAjax) {

            $newBooks = [];

            foreach ($books as $book) {
                $newBooks[] = $book->toArray();
            }

            return $this->renderAjax($newBooks);

        } else {

            return $this->render('Books/View/list.html.twig', array(
                //'books' => $books
            ));
        }
    }

    public function editAction($id)
    {
        return $this->render('Books/View/edit.html.twig');
    }

}