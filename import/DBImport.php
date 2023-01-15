<?php

namespace import;

class DBImport implements iImport
{
    public $connectBD;
    public function __construct()
    {
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "arraybase";
        $this->connectBD = mysqli_connect($server , $user , $password, $db) or die("Ошибка: " . mysqli_connect_error());
    }
    public function dataInsert($data)
    {
        $sql = "INSERT INTO `arraytable`(";
            foreach($data as $key => $value){
                $column ='';
                foreach($value as $key2 => $value2){
                    $column .= '`'.$key2 . '`,';
                    $columnInsert = rtrim($column, ',');
                }
            }
        $sql .= $columnInsert.') VALUES ';
            foreach($data as $key => $value){
                $valueInsert = implode(' \',\'', $value);
                $sql .= "('$valueInsert'), ";
            }

            $resultSql = rtrim($sql, ', ');
            $result = mysqli_query($this->connectBD, $resultSql );
                if($result == true){
                    echo  "Данные массива успешно добавлены в базу данных";
                }
        mysqli_close($this->connectBD);
        //insert to DB вставка данных в базу
    }
    
}


        




        