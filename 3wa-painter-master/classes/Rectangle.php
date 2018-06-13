<?php

class Rectangle extends Shape {

	public $width;
	public $height;

	public function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}

	public function draw() {
		$svg = <<<TXT
	
		<rect x="{$this->x}" y="{$this->y}" width="{$this->width}" height="{$this->height}"
  		fill="{$this->color}" />
TXT;

		return $svg;
	}

}
