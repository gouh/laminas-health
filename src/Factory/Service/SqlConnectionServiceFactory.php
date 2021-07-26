<?php

namespace Hangouh\LaminasHealth\Factory\Service;

use Hangouh\LaminasHealth\Service\SqlConnectionService;
use Psr\Container\ContainerInterface;
use Exception;

class SqlConnectionServiceFactory
{
    /**
     * @param ContainerInterface $container
     * @return SqlConnectionService
     * @throws Exception
     */
    public function __invoke(ContainerInterface $container): SqlConnectionService
    {
        if ($container->has('Laminas\Db\Adapter\Adapter')) {
            $adapter = $container->get('Laminas\Db\Adapter\Adapter');
            return new SqlConnectionService($adapter);
        }

        if ($container->has('Doctrine\ORM\EntityManager')) {
            $adapter = $container->get('Doctrine\ORM\EntityManager');
            return new SqlConnectionService($adapter);
        }

        if ($container->has('doctrine.entity_manager.orm_default')) {
            $adapter = $container->get('doctrine.entity_manager.orm_default');
            return new SqlConnectionService($adapter);
        }

        throw new Exception(
            'You do not have a previous configuration to be able to create an instance of SqlConnectionService'
        );
    }
}