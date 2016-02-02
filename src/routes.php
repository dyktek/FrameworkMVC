<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('books', new Routing\Route('/books/{page}/{test}', array(
    'test' => 2,
    'page' => 1,
    '_controller' => 'Books\\Controller\\BooksController::indexAction'
)));

$routes->add('bookEdit', new Routing\Route('/books/edit/book/{id}', array(
    '_controller' => 'Books\\Controller\\BooksController::editAction'
)));


return $routes;