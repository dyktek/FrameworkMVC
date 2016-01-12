<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();


$routes->add('home', new Route( '/home/{page}/{name}', array('page' => 1, 'name' => 'Krzysiek')));
$routes->add('list', new Route( '/list'));

return $routes;