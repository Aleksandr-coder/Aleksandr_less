<?php

namespace Core;


use Public\bar;
use Public\barn;
// 2) Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер


	final class threeBar extends bar 		// Один наследник не должен быть наследуемым
	{
		public $num_threeBar = 8;
						
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
