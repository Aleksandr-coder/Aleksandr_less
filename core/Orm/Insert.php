<?php

namespace Core\Orm;
use PDO;

class Insert
{
    private PDO $connector;
    public string $tableName = 'user';
    public array $columns = [];
    public array $values = [];
    public function __construct()
    {
      $connector = new DBConnector();
      $this->connector = $connector->connect();
    }

    public function execute()
    {
        //var_dump($this->buildQuery());
        //exit;
        $sql = $this->buildQuery();
        $this->connector->query($sql);
    }

    private function buildQuery(): string
    {
        return 'INSERT INTO ' . $this->getTableName() .' (' . $this->getColumns() . ') VALUES (' .$this->getValues() .')';
    }

    public function setTableName (string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function setColumns(array $columns):void
    {
        $this->columns = $columns;
    }

    public function getColumns(): string
    {
        return implode(', ', $this->columns);
    }

    public function setValues(array $values):void
    {
        $this->values = $values;
    }

    public function getValues(): string
    {
        $temp = [];
        foreach($this->values as $value){
            $temp[] = "'" . $value . "'";
        }
        return implode(',', $temp);
    }
}