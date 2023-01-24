<?php

namespace Core\Orm;

class Delete extends Sql
{
    protected function buildQuery()
    {
        $sql = 'DELETE FROM ' . $this->tableName;
        if(!empty($this->where)){
            $sql .= ' WHERE ' . $this->where['id'];
        }
        
        return $sql;
    }
}

