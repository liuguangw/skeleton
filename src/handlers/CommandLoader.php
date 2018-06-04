<?php
namespace app\handlers;

use liuguang\mvc\command\DefaultCommandLoader;
use app\commands\HelloCommand;

class CommandLoader extends DefaultCommandLoader
{

    public function __construct()
    {
        parent::__construct();
        // 添加hello
        $this->set('hello', function () {
            return new HelloCommand();
        });
    }
}

