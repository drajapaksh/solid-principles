<?php 

interface Entity {
	public $attackDamage;
	public $health;
	public $name;

	function move();
	function attack();
	function takeDamage();
}

class Character implements Entity {
	function move(){}
	function attack(){}
	function takeDamage(){}	
}

class Turret implements Entity {
	function move(){
		// Error: turret cannot move
	}
}