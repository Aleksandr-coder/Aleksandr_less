<?php
 
namespace Core\Orm;
use PDO;
class Where extends Sql
{
  
    protected function buildQuery()
    {
        
    }
    public function where(): string
    {
        //echo"<pre>";
       // var_dump($this->where);
        //echo"</pre>";

        $sql = '';
        foreach($this->where as $value){
            $sql .= '(';
            if(!empty($value)){
                foreach($value as $key => $value){
                    $sql .= $key . $this->operator . '\'' . $value . '\'';
                    if(!empty($value)){
                        $sql .= $this->param;
                    }
                }
                $sql = rtrim($sql, $this->param);
            }
            $sql .= ')';
            $sql .= ' OR ';
            
        }$sql = rtrim($sql, ' OR ');
        return $sql;
    }
    //WHERE columnN LIKE pattern; 
    public function whereLike(): string 
    {
        $sql = "";
        $sql.= '(';
        foreach($this->whereLike as $value){
            if(!empty($value)){
                    $sql .=  $value .' LIKE ';
                    continue;
            }
        }
        
        return $sql;
    }
    public function whereBetween(): string
    {
        $sql = '(';
        foreach($this->whereBetween as $value){
            if(!empty($value)){
                    $sql .=  $value .' BETWEEN ';
                    continue;
            }
        }$sql = rtrim($sql, ' BETWEEN ');
        $sql.= ')';
        var_dump($sql);
        return $sql;
    }
}