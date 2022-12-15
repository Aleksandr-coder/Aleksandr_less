<?php
// 1) Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры
// должен содержать абстрактную функцию возведения в степень
namespace Public;
	 
	 class bar extends barn
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
 	public function countCow()
	{
		return $this->result = pow($this->rack2, $this->rack1);
	}
 	
 }
