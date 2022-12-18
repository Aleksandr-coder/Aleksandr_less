<?php

namespace App\controllers\admin;


class Admin
{
    public function index()
    {
        echo 'Hi, Admin';
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