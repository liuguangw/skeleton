<?php
namespace app\controllers\home;

use liuguang\mvc\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{

    public function actionIndex(): Response
    {
        return $this->view([
            'title' => 'hello world',
            'content' => 'hello world !',
            'time' => date('Y-m-d H:i:s')
        ]);
    }
}

