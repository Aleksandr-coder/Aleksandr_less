<?php

namespace App\models;

class Home
{
    public function index()
    {
        return
        [
            '/' => 'home',
            'foto' => 'ocean',
            'city' => 'Florida',
        ];
    }
}