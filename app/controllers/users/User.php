<?php

namespace App\controllers\users;


class User
{
    public function index()
    {
        echo 'Hi, User';
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