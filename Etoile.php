<?php 
require_once 'Shape.php';

class Etoile extends Shape {

	public $p1;
	public $p2;
	public $p3;
	public $p4;
	public $p5;
	public $p6;
	public $p7;
	public $p8;
	public $p9;
	public $p10;

	
	function __construct($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10) {

		$this->points = "$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10";
	}

		public function draw() {
		$svg = <<<TXT
	
		<polygon x="{$this->positionX}" y="{$this->positionY}" opacity="{$this->opacity}" points="{$this->points}"
		fill="{$this->color}" />
TXT;
		return $svg;
	}
}