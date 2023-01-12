<?php

namespace App\models;

use Core\Orm\Select;

class Gallery
{
    public string $tableName;
    
    public function From() 
    {
        $select = new Select;
        $select->setFields(['*']);
        $select->setTableName($this->nameClassString());
        return $select->executeFrom();
    }
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
    
    public function nameClassString(): string
    {
        $this -> tableName = get_class($this);
        $nameArr = explode("\\", $this->tableName);
        $tableName = end($nameArr);
        return $tableName;
    }
}