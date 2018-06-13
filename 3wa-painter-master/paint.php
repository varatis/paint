<?php
include 'classes/Shape.php';
include 'classes/Point.php';
include 'classes/Rectangle.php';
include 'classes/Triangle.php';
include 'classes/Square.php';
include 'classes/Ellipse.php';
include 'classes/Circle.php';
include 'classes/Canvas.php';

$canvas = new Canvas();

$rect1 = new Rectangle(100, 50);
$rect1->setPosition(200, 10);
$rect1->setColor('red');

$canvas->addShape($rect1);

$rect2 = new Rectangle(60, 90);
$rect2->setPosition(0, 100);
$rect2->setColor('green');

$canvas->addShape($rect2);

$ellipse = new Ellipse(50, 80);
$ellipse->setPosition(50, 50);
$ellipse->setColor('orange');

$square = new Square(100);
$square->setPosition(50,50);

$circle = new Circle(30);
$circle->setPosition(200, 200);

$triangle = new Triangle(new Point(30, 30), new Point(10, 10), new Point(70, 150));

$canvas->addShapes([$ellipse, $square, $circle, $triangle]);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Painter</h1>
	
	<?= $canvas->draw() ?>

</body>
</html>