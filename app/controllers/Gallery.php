<?php

namespace App\controllers;

class Gallery
{
    public function index()
    {
        echo 'Hi, Gallery';
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