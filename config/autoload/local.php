<?php

use Laminas\Cache\Storage\Adapter\Redis;

return [
    # Config Sql
    'db' => [
        'hostname' => '',
        'database' => '',
        'port' => '',
        'driver' => 'Pdo_Mysql',
        'username' => '',
        'password' => ''
    ],

    # Config Cache Db
    'caches' => [
        Redis::class => [
            'adapter' => [
                'name' => Redis::class,
                'options' => [
                    'ttl' => 1,
                    'server' => [
                        'host' => '',
                        'port' => ''
                    ],
                    'password' => ''
                ]
            ]
        ]
    ],

    # Config Mongo DB
    'mongo' => [
        'server' => '',
        'port' => '',
        'connectionString' => '',
        'user' => '',
        'password' => '',
        'dbname' => ''
    ]
];