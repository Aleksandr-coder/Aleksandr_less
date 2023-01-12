<?php

namespace App\controllers\users;

use App\models\User as modelUser;
use Core\Render;

class User
{
    public function index()
    {
        $model = new modelUser();
        $data['newKey'] = $model -> index();
        Render::render('social/User.php', $data);
    }
    public function metod()
    {
        echo 'I metod User';
    }
    
    public function error()
    {
        echo 'metod not found in User';
    }
}