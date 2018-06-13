<?php 
require_once 'Shape.php';

class Rectangle extends Shape {

	public $width;
	public $height;
	
	function __construct($width, $height) {

		$this->width = $width;
		$this->height = $height;
		
	}

		public function draw() {
		$svg = <<<TXT
	
		<rect x="{$this->positionX}" y="{$this->positionY}" opacity="{$this->opacity}" width="{$this->width}" height="{$this->height}" 
		fill="{$this->color}" />
TXT;
		return $svg;
	}
}