<?php

namespace Simplex;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing;

class Router
{
    private $routes;

    public function __construct(Routing\RouteCollection $routes)
    {
        $this->routes = $routes;
    }

    public function addGet($name, $path, $role, $defaults)
    {
        $this->routes->add($name, new Routing\Route($path, $defaults, array(), array('role' => $role), '', array(), Request::METHOD_GET));
    }

    public function addPost($name, $path, $role, $defaults)
    {
        $this->routes->add($name, new Routing\Route($path, $defaults, array(), array('role' => $role), '', array(), Request::METHOD_POST));
    }

    public function addDelete($name, $path, $role, $defaults)
    {
        $this->routes->add($name, new Routing\Route($path, $defaults, array(), array('role' => $role), '', array(), Request::METHOD_DELETE));
    }

    public function addPut($name, $path, $role, $defaults)
    {
        $this->routes->add($name, new Routing\Route($path, $defaults, array(), array('role' => $role), '', array(), Request::METHOD_PUT));
    }


    public function getRouteCollection()
    {
        return $this->routes;
    }
}