<?php
 
namespace Core\Orm;
use PDO;

abstract class Sql
{
    protected string $tableName = 'user';

    protected array $where = [
        
    ];
    protected array $whereLike;//['phone', '\'7%\''];
    protected array $whereBetween; //['id', '0 AND 200'];

    protected string $param = ' OR ';
    protected string $operator = '=';
    protected PDO $connector;
    
   
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

    abstract protected function buildQuery();

    public function setTableName (string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }
    public function setWhere(array $where): self
    {
        $this->where = $where;
        return $this;
    }
    public function getWhere()
    {
        $whereOB = new Where($this->where);
        return $whereOB->where();
    }
    public function setWhereLike($whereLike): self
    {
        $this->whereLike = $whereLike;
        return $this;
    }
    public function getWhereLike()
    {
        $whereOB = new Where($this->whereLike);
        return $whereOB->whereLike();
    }
    public function setWhereBetween($whereBetween): self
    {
        $this->whereBetween = $whereBetween;
        return $this;
    }
    public function getWhereBetween()
    {
        $whereOB = new Where($this->whereBetween);
        return $whereOB->whereBetween();
    }

}