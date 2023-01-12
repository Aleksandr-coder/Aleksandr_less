<?php

namespace App\controllers;

use App\models\About as modelAbout;
use Core\Render;
class About
{
    public function index()
    {
        var_dump($_POST);
        $model = new modelAbout();
        $data['newKey'] = $model -> From();
        Render::render('social/about.php', $data);
    }
    public function metod()
    {
        echo 'I metod about';
    }
    
    public function error()
    {
        echo 'metod not found in About';
    }
}