<?php

namespace App\controllers;

use App\models\Home as modelHome;
use Core\Render;

class Home extends Controller
{
    public function index()
    {
        //$this->render('social/home.php');
        var_dump($_GET);
        $model = new modelHome();
        $data['newKey'] = $model -> index();
        Render::render('social/home.php', $data);

    }
    public function metod()
    {
        echo 'I metod home';
    }
    
    public function error()
    {
        echo 'metod not found in Home';
    }
}