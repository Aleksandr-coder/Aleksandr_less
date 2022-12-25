<?php

namespace App\controllers;

use App\models\Gallery as modelGallery;
use Core\Render;

class Gallery extends Controller
{
    public function index()
    {
        $model = new modelGallery();
        $data['newKey'] = $model -> index();
        Render::render('social/gallery.php', $data);
        //$this->render('social/gallery.php');
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