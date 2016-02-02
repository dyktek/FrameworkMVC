<?php

namespace Simplex\Providers;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DoctrineServiceProvider extends ServiceProvider
{
    public function provide(array $options = [])
    {
        $config = Setup::createAnnotationMetadataConfiguration([], true);
        return EntityManager::create($this->config, $config);
    }
}