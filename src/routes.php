<?php

use Simplex\Router;
use Symfony\Component\Routing;

$router =  new Router(new Routing\RouteCollection());

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

$router->addPost('categoryPost', '/api/category', 3, array(
    '_controller' => 'Api\\Controller\\CategoriesController::saveAction'
));

$router->addPost('authPost', '/api/auth', 3, array(
    '_controller' => 'Api\\Controller\\AuthController::authAction'
));


return $router->getRouteCollection();


return $routes;

//GET /articles
//GET /articles/2
//PUT /articles
//POST /articles
//DELETE /articles/2