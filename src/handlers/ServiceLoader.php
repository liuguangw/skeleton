<?php
namespace app\handlers;

use liuguang\mvc\ServiceLoader;
use liuguang\mvc\handlers\IRouteHandler;

class ServiceLoader extends ServiceLoader
{

    public function loadService(): void
    {
        parent::loadService();
        $this->container->addNameMap(IRouteHandler::class, RouteHandler::class, 'routeHandler');
    }
}

