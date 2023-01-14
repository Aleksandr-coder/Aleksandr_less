<?php
    include 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Вставка и вывод данных из массива в БД</title>
</head>
<body>
<?php

use import\DBImport;
use import\ReportImport;

$data = [
    ['first_name' => 'Tom', 'last_name' => 'Smith', 'phone_number' => '14165723771', 'age' => 25, 'email' => 'Tom@gmail.com'],
    ['first_name' => 'Alex', 'last_name' => 'Brown', 'phone_number' => '15496792106', 'age' => 47, 'email' => 'Alex@gmail.com'],
    ['first_name' => 'Oliver', 'last_name' => 'Thomson', 'phone_number' => '17835491205', 'age' => 21, 'email' => 'Oliver@gmail.com'],
    ['first_name' => 'Kate', 'last_name' => 'Evans', 'phone_number' => '13546289437', 'age' => 23, 'email' => 'Kate@gmail.com'],
    ['first_name' => 'Jennifer', 'last_name' => 'Radriges', 'phone_number' => '16487623419', 'age' => 34, 'email' => 'Jennifer@gmail.com'],
    ['first_name' => 'Oscar', 'last_name' => 'Rild', 'phone_number' => '19326548567', 'age' => 30, 'email' => 'Oscar@gmail.com'],
    ['first_name' => 'William', 'last_name' => 'Frankston', 'phone_number' => '19832659167', 'age' => 59, 'email' => 'William@gmail.com'],
    ['first_name' => 'Peter', 'last_name' => 'Hall', 'phone_number' => '19127569142', 'age' => 32, 'email' => 'Peter@gmail.com'],
    ['first_name' => 'Mario', 'last_name' => 'Gordon', 'phone_number' => '13285691047', 'age' => 27, 'email' => 'Mario@gmail.com'],
    ['first_name' => 'Helen', 'last_name' => 'Bellora', 'phone_number' => '13862954013', 'age' => 18, 'email' => 'Helen@gmail.com'],

];

$importArrayInTable = new DBImport;
echo $importArrayInTable->dataInsert($data);
$exportTablefromBD = new ReportImport;
echo $exportTablefromBD->dataInsert($data);



 /*
Создать интерфейс с 1 методом (метод принимает массив данных). Создать класс для вставки данных в БД и второй класс для вывода данных на экран в виде html таблицы. Классы должны реализовывать интерфейс.  Вставка данных в БД осуществляется методом который в указан в интерфейсе. Во втором классе вывод данных на экран тоже осуществляется методом который указан в интерфейсе.

в отдельном файлике продемонстрировать, что классы рабочие на тестовом массиве.

 (по желанию использовать пространство имён)

Для сдачи ДЗ необходимо прислать SQL создание таблицы,  ссылку на репозиторий с выполненным ДЗ.  ( На занятии начал выполнение этого ДЗ и подробно рассказал и показал, что конкретно надо реализовать).
*/

?>
</body>
</html>


