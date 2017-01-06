<?php

namespace CodeEmailMKT\Infrastructure;

use CodeEmailMKT\Servece\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{

    public function create()
    {
        require __DIR__ . '/config/doctrine.php';
    }
}