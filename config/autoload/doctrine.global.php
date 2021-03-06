<?php

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => '123',
                    'dbname' => 'codeemailmkt',
                    'driverOptions' => [
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    ]
                ]
            ]
        ],
        'driver' => [
            'CodeEmailMKT_driver' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [__DIR__ . '/../../src/CodeEmailMKT/Entity']
            ],
            'orm_default' => [
                'drivers' => [
                    'CodeEmailMKT\Entity' => 'CodeEmailMKT_driver'
                ]
            ]
        ]
    ]
];