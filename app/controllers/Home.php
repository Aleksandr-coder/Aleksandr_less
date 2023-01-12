<?php

namespace App\controllers;

use App\models\Home as modelHome;
use Core\Render;

class Home extends Controller
{
    public string $tableName;
    public function index()
    {
        //$this->render('social/home.php');
        var_dump($_POST);
        $model = new modelHome();
        $data['newKey'] = $model -> From();
        $data['newKey2'] = $model -> Limit();
        $data['newKey3'] = $model -> GroupBy();
        $data['newKey4'] = $model -> OrderBy();
        $data['newKey5'] = $model -> Join();
        Render::render('social/home.php', $data);

    }
    public function metod()
    {
        
    }
    
    public function error()
    {
        echo 'metod not found in Home';
    }

}