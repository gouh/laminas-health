<?php

namespace Hangouh\LaminasHealth\Factory\Service;

use Hangouh\LaminasHealth\Service\MongoConnectionService;
use Psr\Container\ContainerInterface;
use Exception;

class MongoConnectionServiceFactory
{
    /**
     * @param ContainerInterface $container
     * @return MongoConnectionService
     * @throws Exception
     */
    public function __invoke(ContainerInterface $container): MongoConnectionService
    {
        if ($container->has('Doctrine\ODM\MongoDB\DocumentManager')) {
            return new MongoConnectionService($container->get('Doctrine\ODM\MongoDB\DocumentManager'));
        }

        return new MongoConnectionService();
    }
}