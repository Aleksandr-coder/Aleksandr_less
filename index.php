<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

//посчитать длину массива
print_r(count($arr));
echo('<br>');
//переместить первые 4 элемента массива в конец массива
array_push($arr, $arr[0], $arr[1], $arr[2], $arr[3]);
unset($arr[0], $arr[1], $arr[2], $arr[3]);
print_r($arr);
echo('<br>');

//получить сумму 4,5,6 элемента
$sum = 0;
for($i = 4; $i <= 6; $i++){
    $sum += $arr[$i];
}
echo $sum;

echo('<br>');

for ($i = 4; $i <= 6; $i++){
    $arr2 = [$arr[$i]];
}
print_r($arr2);
echo('<br>');

$firstArr = [

'one' => 1,

'two' => 2,

'three' => 3,

'foure' => 5,

'five' => 12,

];


$secondArr = [

'one' => 1,

'seven' => 22,

'three' => 32,

'foure' => 5,

'five' => 13,

'six' => 37,

];


//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$result1 = array_diff($secondArr, $firstArr);
print_r ($result1);
echo('<br>');
//найти все элементы которые присутствую в первом и отсутствуют во втором
$result2 = array_diff($firstArr, $secondArr);
print_r ($result2);
echo('<br>');
//найти все элементы значения которых совпадают
$result = array_intersect($firstArr, $secondArr);
print_r ($result);
echo('<br>');
//найти все элементы значения которых отличается
print_r (array_merge($result1, $result2));
echo('<br>');


$firstArr = [

'one' => 1,

'two' => [

'one' => 1,

'seven' => 22,

'three' => 32,

],

'three' => [

    'one' => 1,

    'two' => 2,

],

'foure' => 5,

'five' => [

     'three' => 32,

     'foure' => 5,

     'five' => 12,

  ],

];


//получить все вторые элементы вложенных массивов. Понимаю что нужно сделать кодом через foreach но хз как.

print_r($firstArr['two']['seven']);
echo('<br>');
print_r($firstArr['three']['two']);
echo('<br>');
print_r($firstArr['five']['foure']);
echo('<br>');

//получить общее количество элементов в массиве

echo count($firstArr, COUNT_RECURSIVE);
echo('<br>');

//получить сумму всех значений в массиве

$result = [];
array_walk_recursive($firstArr, 
    function ($item, $key) use (&$result) {
    $result[] = $item;    
});
print_r (array_sum($result));
echo '<br>';
