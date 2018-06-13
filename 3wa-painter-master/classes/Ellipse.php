<?php

class Ellipse extends Shape {
	
	protected $rx;
	protected $ry;
	
	public function __construct($rx, $ry) {

		$this->rx = $rx;
		$this->ry = $ry;
	}

	public function draw() {
		$svg = <<<TXT
			<ellipse cx="{$this->x}" cy="{$this->y}" rx="{$this->rx}" ry="{$this->ry}" fill="{$this->color}" />
TXT;
		return $svg;
	}

}