<?php

namespace App\controllers\admin;

use App\models\Admin as modelAdmin;
use Core\Render;


class Admin
{
    public function index()
    {
        $model = new modelAdmin();
        $data['newKey'] = $model -> index();
        Render::render('social/Admin.php', $data);
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