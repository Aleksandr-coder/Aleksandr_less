<?php

namespace App\models;

class User
{
    public function index()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=myBase', 'root', '');
        $sth = $dbh->query('SELECT * FROM users');
        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        return $rows;
        //var_dump($dbh);
        //echo'<pre>';
        //var_dump($rows);
        //echo'</pre>';
    }
}