<?php

namespace Books\Controller;

use Symfony\Component\HttpFoundation\Response;
use Books\Model\Books;

class BooksController
{
    public function indexAction($page, $test)
    {

        $model = new Books();

        $data = $model->getList();

        echo '<pre>';
        print_r($data);

        return new Response($page . ', '. $test);
    }

}