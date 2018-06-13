<?php 
require_once 'Shape.php';

class Polygon extends Shape {

	public $p1;
	public $p2;
	public $p3;
	public $p4;
	public $p5;
	public $p6;

	
	function __construct($p1, $p2, $p3, $p4, $p5, $p6) {

		$this->points = "$p1, $p2, $p3, $p4, $p5, $p6";
		
	}

		public function draw() {
		$svg = <<<TXT
	
		<polygon x="{$this->positionX}" y="{$this->positionY}" opacity="{$this->opacity}" points="{$this->points}"
		fill="{$this->color}" />
TXT;
		return $svg;
	}
}