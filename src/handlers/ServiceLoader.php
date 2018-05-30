<?php
namespace app\handlers;

use liuguang\mvc\ServiceLoader as SuperServiceLoader;
use liuguang\mvc\handlers\IRouteHandler;

class ServiceLoader extends SuperServiceLoader
{

    public function loadService(): void
    {
        parent::loadService();
        $this->container->addNameMap(IRouteHandler::class, RouteHandler::class, 'routeHandler');
    }
}

