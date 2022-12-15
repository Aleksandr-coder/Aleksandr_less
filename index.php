<?php
// 1) Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры
// должен содержать абстрактную функцию возведения в степень
include 'vendor/autoload.php';


use Public\bar;
use Public\barn;
use Core\oneBar;
use Core\twoBar;
use Core\threeBar;
use App\last_one_bar;
use App\last_two_bar;


// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
$one_bar = new oneBar();
var_dump($one_bar->plus_oneBar());
echo '<br>';
$twoBar = new twoBar();
var_dump($twoBar->minus_oneBar());
echo '<br>';
$threeBar = new threeBar();
var_dump($threeBar->multiplication_oneBar());
echo '<br>';

// 3) Создать по 2 наследника от наследников первого уровня
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством

$last_one_bar = new last_one_bar();
var_dump($last_one_bar);
echo '<br>';
var_dump($last_one_bar->plus_last_one_bar());
echo '<br>';
var_dump($last_one_bar->plus_bar());
echo '<br>';


$last_two_bar = new last_two_bar();
var_dump($last_two_bar);
echo '<br>';
var_dump($last_two_bar->multiplication_last_two_bar());
echo '<br>';
var_dump($last_two_bar->multiplication_bar());
echo '<br>';


// В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции


$animal = new bar();
echo 'Реализация абстрактной функции(возведения в степень): ' . $animal -> countCow();
