<?php
use liuguang\mvc\Application;

// 入口文件
define('APP_PUBLIC_PATH', __DIR__);
define('APP_PUBLIC_CONTEXT', '');
define('APP_SRC_PATH', dirname(constant('APP_PUBLIC_PATH')));
include APP_SRC_PATH . '/../vendor/autoload.php';
Application::init();