<?php

namespace Core;

use Public\bar;
use Public\barn;
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
