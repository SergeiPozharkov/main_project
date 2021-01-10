<?php

function min2($a, $b)
{
    return $a < $b ? $a : $b;
}

$a = 10;
$b = 2;
$c = 3;
$d = 8;
$e = 10;
$f = 15;

echo min2(min2(min2(min2(min2($a, $b), $c), $d), $e), $f);
