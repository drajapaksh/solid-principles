<?php 

class Animal {
	function animalSounds($sounds) {
		foreach ($sounds as $sound) {
			echo $sound['title'];
		    switch ($sound['type']) {
		    	case 'Dog':
		    		echo "Bow bow <br>";
		    		break;
		    	case 'Cow':
		    		echo "Moo moo <br>";
		    		break;
		    	case 'Fish':
		    		echo "Gulugulugulugulu <br>";
		    		break;
		    	case 'Cat':
		    		echo "Meow <br>";
		    		break;
		    }
		}
	}
}

$array = [
	[
		'type' => 'Dog',
		'title' => 'A dog will sound like this : '
	],
	[
		'type' => 'Cow',
		'title' => 'A Cow will sound like this : '
	],
	[
		'type' => 'Fish',
		'title' => 'A Fish will sound like this : '
	],
	[
		'type' => 'Cat',
		'title' => 'A Cat will sound like this : '
	],
];

$animal = new Animal;
$animal->animalSounds($array);