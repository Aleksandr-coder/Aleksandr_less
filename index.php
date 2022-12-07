<?php
//Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.
 $arr_city = [
		['Бельгия', 'Нидерланды', 'Франция', 'россия'],
		['Люксембург', 'Великобритания', 'США', 'Індия'],
		['Канада', 'Португалия', 'Италия', 'Китай'],
		['Швеция', 'Германия', 'Афганистан', 'Испания' ],
];

function str_arr(array $arr_city, $key): void
{
	foreach ($arr_city as $key1 => $value) {
	if (is_array($value)) {
		$keys = array_keys($value);
		if (isset ($keys[$key])) {
			print_r($value [$keys[$key]]);echo '<br>';
			}
		}
	}
}
str_arr($arr_city, 2);


//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

$lorem = 'be bebu';

function count_string($lorem, $x = 'b')
{
	if(is_string($lorem)){
		$tmp = preg_split('//', $lorem, -1, PREG_SPLIT_DELIM_CAPTURE);
	    foreach ($tmp as $c) {
	        if(isset($chr[$c])){
	        	$chr[$c] += 1;
	        }
	        else{
				$chr[$c] = 1;
	        }
	    }
		return is_bool($x) ? ($x ? $chr : count($chr)) : $chr[$x];
	}
	else{
		return false;
	}
}
var_dump(count_string($lorem)); // Указав второе значение можно посчитать любую указаную букву, по умолчанию буква b

echo '<br>';

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
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
     'five' => 16,
  ],
];

function arr_sum(array $firstArr)
	{
		array_walk_recursive($firstArr, 
		    function ($item, $key) use (&$result) {
		    $result[] = $item;    
		});
		$sum = 0;
		foreach ($firstArr as $key => $value) {
			if (is_array($value)) {
				$sum =  (array_sum($result));
			}
		}
		return $sum;
	}
var_dump(arr_sum($firstArr));

echo '<br>';

//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float

$qwatro_min = 3;
$qwatro_max = 16;

function cube($num_min, $num_max)
{
	$sum = $num_max / $num_min;
	return (float)$sum;
}
var_dump(cube($qwatro_min, $qwatro_max));
