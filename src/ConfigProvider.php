<?php

namespace Hangouh\LaminasHealth;

use Hangouh\LaminasHealth\Factory\Service\EndpointConnectionServiceFactory;
use Hangouh\LaminasHealth\Factory\Service\MongoConnectionServiceFactory;
use Hangouh\LaminasHealth\Factory\Service\RedisConnectionServiceFactory;
use Hangouh\LaminasHealth\Factory\Service\SqlConnectionServiceFactory;
use Hangouh\LaminasHealth\Service\EndpointConnectionService;
use Hangouh\LaminasHealth\Service\MongoConnectionService;
use Hangouh\LaminasHealth\Service\RedisConnectionService;
use Hangouh\LaminasHealth\Service\SqlConnectionService;


class ConfigProvider
{
    /**
     * Return default configuration
     *
     * @return array
     */
    public function __invoke(): array
    {
        return [
            EndpointConnectionService::class => EndpointConnectionServiceFactory::class,
            MongoConnectionService::class => MongoConnectionServiceFactory::class,
            RedisConnectionService::class => RedisConnectionServiceFactory::class,
            SqlConnectionService::class => SqlConnectionServiceFactory::class,
        ];
    }
}