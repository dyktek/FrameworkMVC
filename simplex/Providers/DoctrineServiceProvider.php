<?php

namespace Simplex\Providers;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

class DoctrineServiceProvider extends ServiceProvider
{
//    public function provide(array $options = [])
//    {
//        $config = Setup::createAnnotationMetadataConfiguration([], true);
//        return EntityManager::create($this->config, $config);
//    }

    public function provide(array $options = [])
    {
        $isDevMode = true;

        $config = Setup::createConfiguration($isDevMode);
        $driver = new AnnotationDriver(new AnnotationReader(), []);

        AnnotationRegistry::registerLoader('class_exists');
        $config->setMetadataDriverImpl($driver);



        return EntityManager::create($this->config, $config);
    }
}