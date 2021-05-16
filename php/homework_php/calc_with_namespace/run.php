<?php

require_once "autoload.php";

use calc_first\FirstCalc;
use calc_second\SecondCalc;

$calc1 = new FirstCalc(4, 2);
echo "<h1>Первый калькулятор:</h1>";
echo "<b>a</b> = {$calc1->getA()}<br>";
echo "<b>b</b> = {$calc1->getB()}<br>";
echo "<b>Сумма</b> = {$calc1->sum()}";
echo "<br>";
echo "<b>Произведение</b> = {$calc1->mult()}";

$calc2 = new SecondCalc(9, 3);
echo "<h1>Второй калькулятор:</h1>";
echo "<b>a</b> = {$calc2->getA()}<br>";
echo "<b>b</b> = {$calc2->getB()}<br>";
echo "<b>Разность</b> = {$calc2->diff()}";
echo "<br>";
echo "<b>Частное от деления</b> = {$calc2->div()}";
