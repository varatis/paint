<?php

require_once 'Shape.php';

class Ellipse extends Shape {

	public $rayonX;
	public $rayonY;

	function __construct($rx, $ry) {

		$this->rayonX = $rx;
		$this->rayonY = $ry;
	}

	public function draw() {
		$svg = <<<TXT
	
		<ellipse cx="{$this->positionX}" cy="{$this->positionY}" opacity="{$this->opacity}" rx="{$this->rayonX}" ry="{$this->rayonY}"
		fill="{$this->color}" />
TXT;
		return $svg;
	}

}
