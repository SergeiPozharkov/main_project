<?php

require '../vendor/autoload.php';

use classes\Rectangle;
use classes\RightTriangle;
use classes\Square;

$square = new Square();
$rectangle = new  Rectangle();
$rightriangle = new RightTriangle();

echo $square->setA(4)->figureSquare() . "<br>";
echo $rectangle->setA(2)->setB(6)->figureSquare() . "<br>";
echo $rightriangle->setA(3)->setB(9)->figureSquare();