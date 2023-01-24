<?php

namespace App\models;

use Core\Orm\Select;
use Core\Orm\Insert;
use Core\Orm\Delete;

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
    public function delete(int $id=NULL)
    { 
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        if(!is_null ($id)){
            $delete->setWhere(['id' => 'id ='. $id]);
        }
        var_dump($delete);
        return $delete->execute();
    }
}  

