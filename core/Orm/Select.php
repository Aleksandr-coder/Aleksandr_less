<?php
 
namespace Core\Orm;
use PDO;
class Select extends Sql
{
    public array $fields = ['*'];
    public array $groupBy;
    public int $limits;
    public string $OrderBy;
    
    public function execute(): ?array
    {
        $sql = $this->buildQuery();
        $query = $this->connector->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    protected function buildQuery(): string
    {
        $sqlSelect = 'SELECT ' . $this->getFieldsStrind () .' FROM ' . $this->tableName;
        if(!empty($this->where)){
            return $sqlSelect .= ' WHERE ' . $this->getWhere();
        }
        if(!empty($this->whereLike)){
            return $sqlSelect .= ' WHERE ' . $this->getWhereLike();
            var_dump($sqlSelect);
        }
        if(!empty($this->whereBetween)){
            return $sqlSelect .= ' WHERE ' . $this->getWhereBetween();
            var_dump($sqlSelect);
        }
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
