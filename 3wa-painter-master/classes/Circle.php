<?php

class Circle extends Ellipse {
	
	public function __construct($rayon) {

		parent::__construct($rayon, $rayon);
	}

}