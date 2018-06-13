<?php 
require_once 'Shape.php';

class Circle extends Shape {

	public $r;
	
	function __construct($r) {

		$this->r = $r;
		
	}

		public function draw() {
		$svg = <<<TXT
	
		<circle cx="{$this->positionX}" cy="{$this->positionY}" opacity="{$this->opacity}" r="{$this->r}" 
		fill="{$this->color}" />
TXT;
		return $svg;
	}
}