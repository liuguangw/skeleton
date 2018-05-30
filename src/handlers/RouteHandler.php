<?php
namespace app\handlers;

use liuguang\mvc\Route;
use liuguang\mvc\handlers\IRouteHandler;

/**
 * 定义路由
 *
 * @author liuguang
 *        
 */
class RouteHandler implements IRouteHandler
{

    /**
     *
     * {@inheritdoc}
     *
     * @see \liuguang\mvc\handlers\IRouteHandler::load()
     */
    public function load(): void
    {
        Route::get('/')->setName('index')->bind();
    }
}

