<?php

namespace App\models;

use Core\Orm\Select;

class Home
{ 
    //public $nameClass = get_class($this);
    //public $nameThisClass = get_class($this);
    
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
