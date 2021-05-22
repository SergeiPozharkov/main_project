<?php

require __DIR__ . '/vendor/autoload.php';

use Pozharkov\Calc;

$calc = new Calc(2, 3);
echo $calc->sum();