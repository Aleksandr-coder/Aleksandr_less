<?php

namespace App\models;

use Core\Orm\Select;
use Core\Orm\Insert;

class Home
{ 
    //public $nameClass = get_class($this);
    //public $nameThisClass = get_class($this);
    
    public string $tableName = 'user';
    public function From() 
    {
        $select = new Select;
        $select->setFields(['*']);
        $select->setTableName($this->tableName);
        $select->setLimits(99);
        $select->setGroupBy(['password']);
        $select->setOrderBy('name_User');
        return $select->execute();
        
    }
    public function addUsers(array $data)
    {
        if(!empty($data['first_name']) && empty($data['email'] && empty($data['phone']))){
            $insert = new Insert;
            $insert->setTableName($this->tableName);
            $insert->setColumns(['first_name','email', 'phone']);
            $insert->setValues([$data['first_name'], $data['email'], $data['phone']]);
            return $insert->execute();
        }
        
    }
    /*
    public function Limit() 
    {
        $select = new Select;
        $select->setFields(['*']);
        $select->setTableName($this->nameClassString());
        return $select->executeLimit();
    }
    public function GroupBy() 
    {
        $select = new Select;
        $select->setFields(['*']);
        $select->setTableName($this->nameClassString());
        $select->getGroupByStrind();
        return $select->executeGroupBy();
    }

    public function OrderBy() 
    {
        $select = new Select;
        $select->setFields(['*']);
        $select->setTableName($this->nameClassString());
        return $select->executeOrderBy();
    }

    public function Join() 
    {
        $select = new Select;
        $select->setFields(['*']);
        $select->setTableName($this->nameClassString());
        return $select->executeJoin();
    }
    *//*
    public function nameClassString(): string
    {
        $this -> tableName = get_class($this);
        $nameArr = explode("\\", $this->tableName);
        $tableName = end($nameArr);
        return $tableName;
    }*/
}  

