<?php 
class Point {
	public $x;
	public $y;

	public function __construct($x, $y) {

		$this->x = $x;
		$this->y = $y;
	}

	protected function getX() {
		return $this->x;
	}

	public function getY() {
		return $this->x;
	}

}

$point1 = new Point(100, 10);

echo $point1->x;