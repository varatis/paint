<?php
include 'canvas.php';
include 'ellipse.php';
include 'Circle.php';
include 'Rectangle.php';
include 'Triangle.php';
include 'Etoile.php';

$shape = new Toile();

$ellipse = new Ellipse(200, 40);
$ellipse->setPosition(200,200);
$ellipse->setColor("red");

$circle = new Circle(50);
$circle->setPosition(200,200);
$circle->setColor("blue");

$rectangle = new Rectangle(300,100);
$rectangle->setPosition(100,150);
$rectangle->setColor("green");
$rectangle2 = new Rectangle(150,150);
$rectangle2->setPosition(200,350);
$rectangle2->setColor("orange");

$poly = new Polygon(200,10 ,250,190 ,160,210);
$poly->setColor("red");


$etoile = new Etoile(100,10, 40,198, 190,78, 10,78, 160,198);
$etoile->setColor("black");


$canvas->addShapes([$ellipse, $circle, $rectangle]);

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