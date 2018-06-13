<?php

class Canvas {

	protected $shapes = [];

	function addShape(Shape $shape) {
		$this->shapes[] = $shape;
	}

	function addShapes(array $shapes) {
		$this->shapes = array_merge($this->shapes, $shapes);
	}

	function draw() {
		$svg = '<svg style="border: 1px solid red">';

		foreach ($this->shapes as $shape) {
			$svg .= $shape->draw();
		}

		$svg .= "</svg>";

		var_dump($svg);

		return $svg;
	}

}