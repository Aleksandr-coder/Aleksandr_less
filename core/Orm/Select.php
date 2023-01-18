<?php

namespace Core\Orm;
use Core\Orm\DBConnector;
use PDO;

class Select
{
    private PDO $connector;
    private string $tableName = 'home';
    public array $fields = ['*'];
    public array $groupBy;
    public int $limits;
    public string $OrderBy;
    
    

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
        $sqlSelect = 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName;
        if(!empty ($this->limits)){
             return $sqlSelect .= ' LIMIT '. $this->limits;
        }
        if(!empty($this->groupBy)){
            return $sqlSelect .= ' GROUP BY ' . $this->getGroupByStrind () ;
        }
        if(!empty($this->OrderBy)){
            return $sqlSelect .= ' ORDER BY '. $this->OrderBy;
        }
        else{
            return $sqlSelect;
        }
    }
    /*private function buildQueryJoin(): string
    {
        return 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName . ' LEFT JOIN user ON home.name_User=user.password';
    }*/

    public function setTableName (string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function setFields (array $fields): void
    {
        $this->fields = $fields; 
    }

    public function setGroupBy (array $groupBy): void
    {
        $this->groupBy = $groupBy; 
    }

    public function setLimits (int $limits): void
    {
        $this->limits = $limits; 
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
