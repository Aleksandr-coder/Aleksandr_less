<?php

namespace App\models;

class User
{
    public function index()
    {
        return
        [
            '/' => 'abc',
            'age' => 25,
            'name' => 'Alex',
        ];
    }
}