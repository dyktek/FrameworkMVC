<?php

use Simplex\Router;
use Symfony\Component\Routing;

$router =  new Router(new Routing\RouteCollection());

//$router->addGet('site', '/', 3, array(
//    '_controller' => 'Admin\\Controller\\AdminController::indexAction',
//));
//
//$router->addGet('admin', '/admin', 3, array(
//    '_controller' => 'Admin\\Controller\\AdminController::indexAction',
//));
//
//$router->addGet('adminLogin', '/admin/login', 3, array(
//    '_controller' => 'Admin\\Controller\\AdminController::loginAction',
//));
//
//$router->addPost('adminAuth', '/admin/auth', 3, array(
//    '_controller' => 'Admin\\Controller\\AdminController::authAction',
//));


$router->addGet('categories', '/api/categories/{page}', 3, array(
    'page' => 0,
    '_controller' => 'Api\\Controller\\CategoriesController::indexAction'
));

$router->addGet('category', '/api/category/{id}', 3, array(
    'id' => 0,
    '_controller' => 'Api\\Controller\\CategoriesController::categoryAction'
));

$router->addPut('categoryPut', '/api/category', 3, array(
    '_controller' => 'Api\\Controller\\CategoriesController::saveAction'
));


//$router->addGet('articles', '/articles', 0, array(
//    '_controller' => 'Api\\Controller\\ArticlesController::indexAction'
//));
//
//$router->addGet('articlesItem', '/articles/{id}', 0, array(
//    'id' => 0,
//    '_controller' => 'Api\\Controller\\ArticlesController::getArticleAction'
//));
//
//$router->addPut('articlesEdit', '/articles', 0, array(
//    '_controller' => 'Api\\Controller\\ArticlesController::editArticleAction'
//));
//
//$router->addPost('articlesNew', '/articles', 0, array(
//    '_controller' => 'Api\\Controller\\ArticlesController::newArticleAction'
//));
//
//$router->addDelete('articlesDelete', '/articles/{id}', 0, array(
//    'id' => 0,
//    '_controller' => 'Api\\Controller\\ArticlesController::deleteArticleAction'
//));


//TO DELETE
//$router->addGet('books', '/books/{page}/{test}', 3, array(
//    'test' => 2,
//    'page' => 1,
//    '_controller' => 'Books\\Controller\\BooksController::indexAction'
//));
//
//$router->addPut('apiGetBooks', '/api/books', 0, array(
//    '_controller' => 'Books\\Controller\\ApiController::getBooksAction'
//));



return $router->getRouteCollection();


return $routes;

//GET /articles
//GET /articles/2
//PUT /articles
//POST /articles
//DELETE /articles/2