<?php

namespace App;


use Core\twoBar;
// 3) Создать по 2 наследника от наследников первого уровня
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством


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