<?php

namespace Core\Orm;
use Core\Orm\DBConnector;
use PDO;

class Select
{
    private PDO $connector;
    private string $tableName = 'home';
    private string $tableNameTwoo = 'User';
    private array $fields = ['*'];
    private array $groupBy = ['password'];
    private int $limits = 2; 
    private string $OrderBy = 'login';
    
    

    public function __construct()
    {
      $connector = new DBConnector();
      $this->connector = $connector->connect();

    }
    public function executeFrom(): ?array
    {
        $sql = $this->buildQueryFrom();
        $query = $this->connector->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    private function buildQueryFrom(): string
    {
        return 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName;
    }
    public function executeLimit(): ?array
    {
        $sql = $this->buildQueryLimit();
        $query = $this->connector->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    private function buildQueryLimit(): string
    {
        return 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName . $this->getLimitsString ();
    }
    
    public function executeGroupBy(): ?array
    {
        $sql = $this->buildQueryGroupBy();
        $query = $this->connector->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    private function buildQueryGroupBy(): string
    {
        return 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName . ' GROUP BY ' . $this->getGroupByStrind () ;
    }
    
    public function executeOrderBy(): ?array
    {
        $sql = $this->buildQueryOrderBy();
        $query = $this->connector->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    private function buildQueryOrderBy(): string
    {
        return 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName . ' ORDER BY '. $this->OrderBy;
    }

    
    public function executeJoin(): ?array
    {
        $sql = $this->buildQueryJoin();
        $query = $this->connector->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    private function buildQueryJoin(): string
    {
        return 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName . ' LEFT JOIN user ON home.id=user.password';
    }

    public function setTableName (string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function setTableNameTwoo (string $tableNameTwoo): void
    {
        $this->tableNameTwoo = $tableNameTwoo;
    }

    public function setFields (array $fields): void
    {
        $this->fields = $fields; 
    }

    public function setGroupBy (array $groupBy): void
    {
        $this->groupBy = $groupBy; 
    }

    public function getLimits (array $limits): void
    {
        $this->limits = $limits; 
    }

    public function getLimitsString (): string
    {
        $l = ' LIMIT ';
        $result = $l . $this->limits;
        return $result;
    }

    public function getFieldsStrind (): string
    {
        $result = [];
        foreach($this->fields as $key=>$field){
            $result [] = (is_int($key)) ? $field : $field. ' as ' . $key;
        }
        return implode (',', $result);
    }

    public function getGroupByStrind (): string
    {
        $result = [];
        foreach($this->groupBy as $key=>$groupByid){
            $result [] = (is_int($key)) ? $groupByid : $groupByid. ' as ' . $key;
        }
        return implode (',', $result);
    }
    
    public function setOrderBy (string $OrderBy): void
    {
        $this->OrderBy = $OrderBy;
    }
    
}

//Ознакомиться с возможностями SELECT SQL

//Реализовать в классе Select -> join, order by, group by, limit