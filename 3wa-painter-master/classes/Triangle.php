<?php
class Triangle extends Shape {
	
	protected $point1;
	protected $point2;
	protected $point3;
	
	public function __construct(Point $point1, Point $point2, Point $point3) {

		$this->point1 = $point1;
		$this->point2 = $point2;
		$this->point3 = $point3;
	}

	public function draw() {
		$svg = <<<TXT
			<polygon points="{$this->point1->x},{$this->point1->y} {$this->point2->x},{$this->point2->y} {$this->point3->x},{$this->point3->y}" fill="{$this->color}" />
TXT;
		return $svg;
	}

}