<?php

namespace App\controllers;

use App\models\Gallery as modelGallery;
use Core\Render;

class Gallery extends Controller
{
    public function index()
    {
        var_dump($_POST);
        $model = new modelGallery();
        $data['newKey'] = $model -> From();
        Render::render('social/gallery.php', $data);
    }
    public function metod()
    {
        echo 'I metod Gallery';
    }
    
    public function error()
    {
        echo 'metod not found in Gallery';
    }
}