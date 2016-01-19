<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('books', new Routing\Route('/books/{page}/{test}', array(
    'test' => 2,
    'page' => 1,
    '_controller' => 'Books\\Controller\\BooksController::indexAction'
)));

return $routes;