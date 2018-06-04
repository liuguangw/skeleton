<?php
namespace app\handlers;

use liuguang\mvc\ServiceLoader as SuperServiceLoader;
use liuguang\mvc\handlers\IRouteHandler;
use liuguang\mvc\command\CommandLoader as ICommandLoader;

class ServiceLoader extends SuperServiceLoader
{

    public function loadService(): void
    {
        parent::loadService();
        // 路由
        $this->container->addNameMap(IRouteHandler::class, RouteHandler::class, 'routeHandler');
        // 命令行
        $this->container->addNameMap(ICommandLoader::class, CommandLoader::class, 'commandLoader');
    }
}

