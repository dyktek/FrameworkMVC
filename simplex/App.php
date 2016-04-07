<?php

namespace Simplex;

use Simplex\Providers\TwigServiceProvider;
use Simplex\Providers\DoctrineServiceProvider;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;

class App
{
    private $config;

    private $view;

    private $entityManager;

    private $urlGenerator;

    protected $isAjax = false;

    protected $session;

    public function __construct()
    {
        $this->loadConfig();

        $request = Request::createFromGlobals();

        $this->isAjax = $request->isXmlHttpRequest();

        $this->session = new Session();

        if (!$this->isAjax) {
            $routes = include __DIR__ . '/../src/routes.php';
            $this->urlGenerator = new UrlGenerator($routes, new Routing\RequestContext());

            $twig = new TwigServiceProvider($this->config['twig']);
            $this->view = $twig->provide(array(
                'urlGenerator' => $this->urlGenerator
            ));
        }

        $doctrine = new DoctrineServiceProvider($this->config['database']);
        $this->entityManager = $doctrine->provide();
    }

    public function renderAjax($body, $toJson = true)
    {
        if($toJson) {
            $body = json_encode($body);
        }

        return new Response($body);
    }

    public function render($name, $data = [])
    {
        if ($this->isAjax) {
            throw new \Exception('This is XmlHttpRequest, no view');
        }
        $body = $this->view->render($name, $data);

        return new Response($body);
    }

    public function getEntityManager()
    {
        return $this->entityManager;
    }

    private function loadConfig()
    {
        $this->config = include(__DIR__ . '/../src/config.php');
    }

    protected function redirect($path)
    {
        return new RedirectResponse($path);
    }

}