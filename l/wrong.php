<?php 

class Rectangle {
	public $width;
	public $height;

	function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}

	function setWidth($width) {
		$this->width = $width;
	}

	function setHeight($height) {
		$this->height = $height;
	}

	function area() {
		return $this->width * $this->height;
	}
}

class Square extends Rectangle{
	public $width;
	public $height;

	function setWidth($width) {
		$this->width = $width;
		$this->height = $width;
	}

	function setHeight($height) {
		$this->height = $height;
		$this->width = $height;
	}
}

function increaseWidth($rectangle) {
	$rectangle->setWidth($rectangle->width + 1);
}

$rectangle = new Rectangle(20, 5);
$rectangle2 = new Rectangle(8, 8);

increaseWidth($rectangle);
increaseWidth($rectangle2);

print("<pre>");
print_r($rectangle->area());
print("</pre>");

print("<pre>");
print_r($rectangle2->area());
print("</pre>");
die;