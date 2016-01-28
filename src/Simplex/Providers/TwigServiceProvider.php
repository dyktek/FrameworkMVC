<?php

namespace Simplex\Providers;

use Twig_Loader_Filesystem;
use Twig_Environment;

class TwigServiceProvider extends ServiceProvider
{
    public function provide()
    {
        $loader = new Twig_Loader_Filesystem($this->config['dir']);
        return new Twig_Environment($loader, array(
            'cache' => $this->config['cache'],
            'auto_reload' => true
        ));
    }
}