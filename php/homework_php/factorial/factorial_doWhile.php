<?php
$n = 5;
$calcFactorial = 1;
$i = 1;

do {
    $calcFactorial = $calcFactorial * $i++;
} while ($i <= $n);
echo $n . '! = ' . $calcFactorial;