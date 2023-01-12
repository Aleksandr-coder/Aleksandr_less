<?php

namespace Core\Orm;
use Core\Orm\DBConnector;
use PDO;

class Select
{
    private PDO $connector;
    private string $tableName = 'home';
    private array $fields = ['*'];
    
    public function __construct()
    {
      $connector = new DBConnector();
      $this->connector = $connector->connect();

    }
    public function execute(): ?array
    {
        $sql = $this->buildQuery();
        $query = $this->connector->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    private function buildQuery(): string
    {
        return 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName;
    }
    
    public function setTableName (string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function setFields (array $fields): void
    {
        $this->fields = $fields; 
    }

    public function getFieldsStrind (): string
    {
        $result = [];
        foreach($this->fields as $key=>$field){
            $result [] = (is_int($key)) ? $field : $field. ' as ' . $key;
        }
        return implode (',', $result);
    }
}