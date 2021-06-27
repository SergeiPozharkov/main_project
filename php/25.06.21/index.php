<?php

require 'vendor/autoload.php';

use app\Calc as CalcAlias;

$calc = new CalcAlias();
echo $calc->setA(2)->setB(2)->sum() . "<br>";
echo $calc->setA(3)->setB(2)->mult() . '<br>';
echo $calc->setA(9)->setB(3)->div() . "<br>";
echo $calc->setA(5)->setB(2)->dif() . "<br>";
