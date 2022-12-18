<?php

namespace App\controllers;

class About
{
    public function index()
    {
        echo 'Hi, About';
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