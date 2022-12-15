<?php

namespace Core;


use Public\bar;
use Public\barn;
// 2) Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер

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

