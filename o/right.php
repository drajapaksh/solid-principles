<?php 

class Animal {
	function animalSounds($sounds) {
		foreach ($sounds as $sound) {
			echo $sound['title'];
			echo $sound['sound'];
		}
	}
}

class Dog {
	function sound() {
		return [
			'sound' => 'Bow bow<br>',
			'title' => 'A dog will sound like this : '
		];	
	}
}

class Cow {
	function sound() {
		return [
			'sound' => 'Moo moo<br>',
			'title' => 'A Cow will sound like this : '
		];	
	}
}

class Fish {
	function sound() {
		return [
			'sound' => 'Gulugulugulugulu<br>',
			'title' => 'A Fish will sound like this : '
		];	
	}
}

class Cat {
	function sound() {
		return [
			'sound' => 'Meow <br>',
			'title' => 'A Cat will sound like this : '
		];	
	}
}


$array = [
	(new Dog)->sound(),
	(new Cow)->sound(),
	(new Fish)->sound(),
	(new Cat)->sound(),
];

$animal = new Animal;
$animal->animalSounds($array);
