<?php 
interface move() {
	function move();
}

interface attack() {
	function attack();
}

interface takeDamage() {
	function takeDamage();
}

class Character implements move, attack, takeDamage {
	function move(){}
	function attack(){}
	function takeDamage(){}	
}

class Turret implements attack, takeDamage {
	function attack(){
		
	}

	function takeDamage(){
		
	}
}