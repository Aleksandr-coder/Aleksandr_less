<?php

namespace App\models;

class Admin
{
    public function index()
    {
        return
        [
            'name' => 'Admin',
            'password' => '*******',
            'ip' => '5.196.144.15',
        ];
    }
}