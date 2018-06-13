<?php

abstract class Shape {

	public $color = "black";
	public $positionX = 0;
	public $positionY = 0;
	public $opacity = 0.8;

	function setPosition($x, $y) {
		$this->positionX = $x;
		$this->positionY = $y;
	}

	function setColor($color) {
		$this->color = $color;
	}
	
	abstract function draw();
}
