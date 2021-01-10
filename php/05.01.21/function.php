<?php

function max2($a, $b)
{
    if ($a > $b) {
        $res = $a;
    } else {
        $res = $b;
    }
    return $res;
}

$a = 1;
$b = 2;
$c = 3;
$d = 8;
$e = 10;
$f = 15;

echo max2(max2(max2(max2(max2($a, $b), $c), $d), $e), $f);