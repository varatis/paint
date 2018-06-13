<?php

abstract class Shape {

	protected $x = 0;
	protected $y = 0;
	protected $color = 'black';

	public function setPosition($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	public function setColor($color) {
		$this->color = $color;
	}

	abstract function draw();
	
		

};