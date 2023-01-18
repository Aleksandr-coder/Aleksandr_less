<?php

namespace App\controllers\admin;

use App\models\Admin as modelAdmin;
use Core\Render;


class Admin
{
    public function index()
    {
        var_dump($_POST);
        $model = new modelAdmin();
        $data['newKey'] = $model -> From();
        Render::render('social/admin.php', $data);
    }
    public function metod()
    {
        echo 'I metod Admin';
    }
    
    public function error()
    {
        echo 'metod not found in Admin';
    }
}