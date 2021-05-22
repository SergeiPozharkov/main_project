<?php

require __DIR__ . '/vendor/autoload.php';

use Calculators\CalcSum;
use Calculators\CalcMult;
use Calculators\CalcDiff;

$calc1 = new CalcSum(2, 2);
$calc2 = new CalcMult(3, 2);
$calc3 = new CalcDiff(6, 2);

echo $calc1->sum() . "<br>";
echo $calc2->mult() . "<br>";
echo $calc3->diff();
