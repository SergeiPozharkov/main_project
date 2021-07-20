<?php

include '../vendor/autoload.php';

$trapezoid = new  \App\Trapezoid();

echo $trapezoid->setA(5)->setB(4)->setH(6)->square();