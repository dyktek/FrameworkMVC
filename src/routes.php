<?php

use Simplex\Router;
use Symfony\Component\Routing;

$router =  new Router(new Routing\RouteCollection());

$router->addGet('books', '/books/{page}/{test}', array(
    'test' => 2,
    'page' => 1,
    '_controller' => 'Books\\Controller\\BooksController::indexAction'
));

$router->addPut('apiGetBooks', '/api/books', array(
    '_controller' => 'Books\\Controller\\ApiController::getBooksAction'
));

$router->addGet('articles', '/articles', array(
    '_controller' => 'Api\\Controller\\ArticlesController::indexAction'
));

$router->addGet('articlesItem', '/articles/{id}', array(
    'id' => 0,
    '_controller' => 'Api\\Controller\\ArticlesController::getArticleAction'
));

$router->addPut('articlesEdit', '/articles', array(
    '_controller' => 'Api\\Controller\\ArticlesController::editArticleAction'
));

$router->addPost('articlesNew', '/articles', array(
    '_controller' => 'Api\\Controller\\ArticlesController::newArticleAction'
));

$router->addDelete('articlesDelete', '/articles/{id}', array(
    'id' => 0,
    '_controller' => 'Api\\Controller\\ArticlesController::deleteArticleAction'
));



return $router->getRouteCollection();


return $routes;

//GET /articles
//GET /articles/2
//PUT /articles
//POST /articles
//DELETE /articles/2