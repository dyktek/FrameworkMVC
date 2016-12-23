<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use Symfony\Component\HttpFoundation\Session\Session;

$session = new Session();

$request = Request::createFromGlobals();

$routes = include __DIR__.'/../src/routes.php';
$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);
$resolver = new HttpKernel\Controller\ControllerResolver();
$resolverArg = new HttpKernel\Controller\ArgumentResolver();

$framework = new Simplex\Framework($matcher, $resolver, $resolverArg, $routes, $session);
$response = $framework->handle($request);
$response->send();
