<?php

namespace App\models;

use Core\Orm\Select;

class About
{
    public string $tableName;
    
    public function index() 
    {
        $select = new Select;
        $select->setFields(['*']);
        $select->setTableName($this->nameClassString());
        return $select->execute();
    }
    
    public function nameClassString(): string
    {
        $this -> tableName = get_class($this);
        $nameArr = explode("\\", $this->tableName);
        $tableName = end($nameArr);
        return $tableName;
    }
}