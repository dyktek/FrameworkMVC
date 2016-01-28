<?php

namespace Simplex;

use Simplex\Providers\TwigServiceProvider;
use Simplex\Providers\DoctrineServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class App
{
    private $config;

    private $view;

    private $entityManager;

    public function __construct()
    {
        $this->loadConfig();

        $twig = new TwigServiceProvider($this->config['twig']);
        $this->view = $twig->provide();

        $doctrine = new DoctrineServiceProvider($this->config['database']);
        $this->entityManager = $doctrine->provide();
    }

    public function render($name, $data = [])
    {
        $body = $this->view->render($name, $data);

        return new Response($body);
    }

    public function getEntityManager()
    {
        return $this->entityManager;
    }

    private function loadConfig()
    {
        $this->config = include(__DIR__ . '/../config.php');
    }

}