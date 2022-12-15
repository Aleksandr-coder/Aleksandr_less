<?php

namespace App;


use Core\oneBar;
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