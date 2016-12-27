<?php

namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;


class Framework
{
    protected $matcher;
    protected $resolver;
    protected $resolverArg;
    private $routes;
    private $session;

    public function __construct(UrlMatcher $matcher, ControllerResolver $resolver, ArgumentResolver $resolverArg, RouteCollection $routes, Session $session)
    {
        $this->matcher = $matcher;
        $this->resolver = $resolver;
        $this->resolverArg = $resolverArg;
        $this->routes = $routes;
        $this->session = $session;
        
    }

    public function handle(Request $request)
    {
        //$this->matcher->getContext()->fromRequest($request); DRY ;)

        try {
            $request->attributes->add($this->matcher->match($request->getPathInfo()));

            $controller = $this->resolver->getController($request);

//            $route  = $this->routes->get($request->get('_route'));
//
//            $role = $route->getOption('role');
//
//            $userInfo = $this->session->get('userInfo');
//            if(!$userInfo) {
//                $this->session->set('userInfo', [
//                    'role' => 3,
//                    'name' => 'guest',
//                    'email' => ''
//                ]);
//                return new RedirectResponse('/admin/login');
//            }
//
//            if($role < $userInfo['role']) {
//                return new RedirectResponse('/admin/login');
//            }

            $arguments = $this->resolverArg->getArguments($request, $controller);

//            echo '<pre>';
//            print_r($controller[1]);
//            die;

            return call_user_func_array($controller, $arguments);
        } catch (ResourceNotFoundException $e) {
            return new Response('Not Found', 404);
        } catch (\Exception $e) {
            return new Response('An error occurred: ' . $e->getMessage() . '<br> File: ' . $e->getFile() . '<br> Line: ' . $e->getLine(), 500);
        }
    }
}
