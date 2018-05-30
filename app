#!/usr/bin/env php
<?php
use liuguang\mvc\Application;

define('APP_SRC_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'src');
define('APP_PUBLIC_PATH', APP_SRC_PATH . DIRECTORY_SEPARATOR . 'public');
define('APP_PUBLIC_CONTEXT', '');
include __DIR__ . '/./vendor/autoload.php';
Application::init(null, true);
include MVC_SRC_PATH . '/./command/Command.php';