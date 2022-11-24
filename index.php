<?php
/*
$name = "Alex";
$seconrName = "Ponomarenko";

echo $name .' '. $seconrName .'<br>';

$age = 34;

if($age < 50){
    echo "Станеш программистом";
}else{
    echo "поздно пргграммировать иди на пенсию";
}

for($i = 0; $i <= 100; $i += 2){
    echo $i . '<br>';
}
$arr = ['name: ' => 'Alex', 'secondName: ' => 'Ponomarenko', 'age: ' => 34];

asort($arr, SORT_STRING);

foreach($arr as $key => $name){
    echo $key .''. $name . '<br>';
}
function nameFunction(){
    return 'Hello World';
}
$result = nameFunction();
echo $result;
*/
function myName($name, $secondName){
    return $name . ' ' .$secondName . '!';
}
function newLine(int $num = 1){
    for($i = 0; $i < $num; $i++){
        echo '<br>';
    }
}
$name = 'Alex';
$secondName = 'Ponomarenko';

echo myName($name, $secondName);
echo newLine();
echo myName($name, $secondName);
echo newLine();
echo myName($name, $secondName);
echo newLine();

$nameFrend = "Егор";
$ageFrend = "32";
$age = '';
if($ageFrend < 20){
    $age = 'лет';
}
else{ 
    $age = 'года';
   
}

$result = sprintf('Моего друга зовут %s. Ему %d' , $nameFrend, $ageFrend);

echo $result,' '.$age;