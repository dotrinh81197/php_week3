<?php
include_once('circle.php');
include_once('cylinder.php');
include_once('rectangle.php');
include_once('square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle radius: ' . $circle->radius . "</br>";
echo 'Circle area: ' . $circle->calculateArea() .  "</br>";
echo 'Circle perimeter: ' . $circle->calculatePerimeter() .  "</br>";
echo 'Circle after resize has radius : ' . $circle->resize() .  "</br>";
echo 'Circle area after resize :' . $circle->calculateAreaAfterResize() .  "</br>";
echo 'Circle perimeter after resize :' . $circle->calculatePerimeterAfterResize();


echo "<hr>";
$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . "</br>";
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . "</br>";

echo "<hr>";
$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle width :' . $rectangle->width . "</br>";
echo 'Rectangle height :' . $rectangle->height . "</br>";
echo 'Rectangle area: ' . $rectangle->calculateArea() . "</br>";
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . "</br>";

$rectangle->resize();
echo 'Width after resize :' . $rectangle->width . "</br>";
echo 'Height after resize :' . $rectangle->height . "</br>";

echo 'Rectangle area after resize :' . $rectangle->calculateAreaAfterResize() . "</br>";
echo 'Rectangle perimeter after resize : ' . $rectangle->calculatePerimeterAfterResize() . "</br>";

echo "<hr>";

$square = new Square('Square 01', 4, 4);
echo ' Width of square :' . $square->width . "</br>";
echo 'Square area: ' . $square->calculateArea() . "</br>";
echo 'Square perimeter: ' . $square->calculatePerimeter() . "</br>";
$square->resize();
echo 'Width of square:' . $square->width . "</br>";
echo $square->height . "</br>";
echo 'Square area after resize: ' . $square->calculateAreaAfterResize() . "</br>";
echo ' Square perimeter after resize :' . $square->calculatePerimeterAfterResize() . "</br>";
