<?php

namespace CodeEmailMKT\Action;

use CodeEmailMKT\Service\BootstrapInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class BootstrapAction
{

    /**
     * @var BootstrapInterface
     */
    private $bootstrap;

    public function __construct(BootstrapInterface $bootstrap)
    {
        $this->bootstrap = $bootstrap;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $this->bootstrap->create();
        return $next($request, $response);
    }
}
