<?php

namespace Hangouh\LaminasHealth\Factory\Service;

use Hangouh\LaminasHealth\Service\EndpointConnectionService;
use Psr\Container\ContainerInterface;

class EndpointConnectionServiceFactory
{
    /**
     * @param ContainerInterface $container
     * @return EndpointConnectionService
     */
    public function __invoke(ContainerInterface $container): EndpointConnectionService
    {
        return new EndpointConnectionService();
    }
}