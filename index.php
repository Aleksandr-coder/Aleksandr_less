<?php
// 1) Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры
// должен содержать абстрактную функцию возведения в степень -- в низу кода реализовал абстрактную функцию и вывод.
	 class bar
 {
 	public int $rack1 = 2;
 	public int $rack2 = 5;

 	public function getRack1():int
 	{
 		return $this->rack1;
 	}
 	public function setRack1(int $rack1):void
 	{
 		$this->rack1 = $rack1;
 	}

 	public function getRack2():int
 	{
 		return $this->rack2;
 	}
 	public function setRack2(int $rack2):void
 	{
 		$this->rack2 = $rack2;
 	}
 	
 }

// 2) Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер

	class oneBar extends bar
	{
		public $num_oneBar = 4;

	 	public function get_oneBar():int
	 	{
	 		return $this->num_oneBar;
	 	}
	 	public function set_oneBar(int $num_oneBar):void
	 	{
	 		$this->num_oneBar = $num_oneBar;
	 	}

	 	public function plus_oneBar():int
	 	{
	 		return $this->result = $this->num_oneBar + $this->rack2;
	 	}
 	}

	class twoBar extends bar
	{
		public $num_twoBar = 6;

 	public function get_twoBar():int
 	{
 		return $this->num_twoBar;
 	}
 	public function set_twoBar(int $num_twoBar):void
 	{
 		$this->num_twoBar = $num_twoBar;
 	}

 	public function minus_oneBar():int
 	{
 		return $this->result = $this->num_twoBar - $this->rack2;
 	}
 }

	class threeBar extends bar
	{
		private $num_threeBar = 8;				// Один наследник не должен быть наследуемым

 	public function get_threeBar():int
 	{
 		return $this->num_threeBar;
 	}
 	public function set_threeBar(int $num_threeBar):void
 	{
 		$this->num_threeBar = $num_threeBar;
 	}
 	public function multiplication_oneBar():int
 	{
 		return $this->result = $this->num_threeBar * $this->rack2;
 	}
 }

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

class last_one_bar extends oneBar
{
	public $gun = 12;

	function get_gun():int
	{
		return $this->gun;
	}
	function set_gun($gun):void
	{
		$this->gun = $gun;
	}

 	public function plus_last_one_bar():int
 	{
 		return $this->result = $this->num_oneBar + $this->gun;
 	}
 	public function plus_bar():int
 	{
 		return $this->result = $this->rack2 + $this->gun;
 	}
}
$last_one_bar = new last_one_bar();
var_dump($last_one_bar);
echo '<br>';
var_dump($last_one_bar->plus_last_one_bar());
echo '<br>';
var_dump($last_one_bar->plus_bar());
echo '<br>';

class last_two_bar extends twoBar
{
	public $foo = 35;
	function get_foo():int
	{
		return $this->foo;
	}
	function set_foo($foo):void
	{
		$this->foo = $foo;
	}
 	public function multiplication_last_two_bar():int
 	{
 		return $this->result = $this->num_twoBar * $this->foo;
 	}
 	public function multiplication_bar():int
 	{
 		return $this->result = $this->rack2 * $this->foo;
 	}

}

$last_two_bar = new last_two_bar();
var_dump($last_two_bar);
echo '<br>';
var_dump($last_two_bar->multiplication_last_two_bar());
echo '<br>';
var_dump($last_two_bar->multiplication_bar());
echo '<br>';


// В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции

abstract class barn extends bar
{
	abstract public function countCow();
}
class cow extends barn
{
	public function countCow()
	{
		return $this->result = pow($this->rack2, $this->rack1);
	}
}
$animal = new cow();
echo 'Реализация абстрактной функции(возведения в степень): ' . $animal -> countCow();