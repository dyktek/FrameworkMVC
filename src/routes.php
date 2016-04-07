<?php

use Simplex\Router;
use Symfony\Component\Routing;

$router =  new Router(new Routing\RouteCollection());

$router->addGet('admin', '/admin', 0, array(
    '_controller' => 'Admin\\Controller\\AdminController::indexAction',
));

$router->addGet('adminLogin', '/admin/login', 3, array(
    '_controller' => 'Admin\\Controller\\AdminController::loginAction',
));

$router->addPost('adminAuth', '/admin/auth', 3, array(
    '_controller' => 'Admin\\Controller\\AdminController::authAction',
));

$router->addGet('books', '/books/{page}/{test}', 0, array(
    'test' => 2,
    'page' => 1,
    '_controller' => 'Books\\Controller\\BooksController::indexAction'
));

$router->addPut('apiGetBooks', '/api/books', 0, array(
    '_controller' => 'Books\\Controller\\ApiController::getBooksAction'
));

$router->addGet('articles', '/articles', 0, array(
    '_controller' => 'Api\\Controller\\ArticlesController::indexAction'
));

$router->addGet('articlesItem', '/articles/{id}', 0, array(
    'id' => 0,
    '_controller' => 'Api\\Controller\\ArticlesController::getArticleAction'
));

$router->addPut('articlesEdit', '/articles', 0, array(
    '_controller' => 'Api\\Controller\\ArticlesController::editArticleAction'
));

$router->addPost('articlesNew', '/articles', 0, array(
    '_controller' => 'Api\\Controller\\ArticlesController::newArticleAction'
));

$router->addDelete('articlesDelete', '/articles/{id}', 0, array(
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