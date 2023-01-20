<?php

namespace import;
use PDO;

$data[] = $_POST;
class DBImport
{
    public function dbConnect(): PDO
    {
        try{
            $connect = new PDO ("mysql:host=localhost;dbname=usersbase", "root", "");
            return $connect;
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
    /*
    CREATE TABLE Users (id  int AUTO_INCREMENT PRIMARY KEY , first_name  varchar(255), email varchar(255), age int(20), create_date timestamp DEFAULT CURRENT_TIMESTAMP) - создание таблицы
    CREATE UNIQUE INDEX uniq_email ON `users`(`email`) - Создание уникального индекса для email
    CREATE INDEX age ON `users`(`age`); Создание простого индекса для age что бы работал этот запрос SELECT * FROM `arraytable` WHERE `age` > 15
    */
    public function dataInsert(array $data)
    {
        if(!empty($data)){
            $connectBD = $this->dbConnect();
            $sql = "INSERT INTO `users` (`first_name`, `email`, `age`) VALUES (";
            $values = [];
                    $sql .= "?, ?, ?,";
                    $values[] = $data['first_name'];
                    $values[] = $data['email'];
                    $values[] = $data['age'];
                
                $sql = rtrim($sql, ', ');
                $sql .= ')';
            try {
                $connectBD = $this->dbConnect();
                $stm = $connectBD->prepare($sql);
                $stm->execute($values);
                echo 'регистрация нового пользователя успешна';
            } catch (\Exception $e) {
                echo 'Поймано исключение: ',  $e->getMessage(), "\n";
            }
                
        }
    }  
    
}
/*
1.Создать таблицу пользователей (имя, емейл, возраст, дата регистрации ). Создать форму добавления нового пользователя. На сервере написать подготовленный запрос (PDO) для вставки нового пользователя.  Так же создать уникальный индекс для емейла.

2.  SELECT * FROM `arraytable` WHERE `age` > 15. Для этого запроса создать простой индекс.  

Предоставить ссылку на репозиторий с заданием и запросы: создания таблицы, создания уникального индекса , создание простого индекса.

*/


        