<?php
namespace app\controllers\home;

use liuguang\mvc\Controller;

class IndexController extends Controller
{

    public function actionIndex()
    {
        return $this->view([
            'title' => 'hello world',
            'content' => 'hello world !',
            'time' => date('Y-m-d H:i:s')
        ]);
    }
}

