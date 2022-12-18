<?php

namespace App\controllers;

class Home
{
    public function index()
    {
        echo 'Hi, Home';
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