<?php

class Toile {

	public $shapes = [];

	function addShape(Shape $shape) {

		$this->shapes[] = $shape;

	}
		public function draw() {
		$svg = '<svg style="border: 1px solid black">';

			foreach ($this->shapes as $shape) {

				$svg .=$shape->draw();
				
			}

			$svg .= "</svg>";
		return $svg;
	}
}


