<?php
$n = 5;
$calcFactorial = 1;
$i = 1;

while ($i <= $n) {
    $calcFactorial = $calcFactorial * $i++;
}
echo $n . '! = ' . $calcFactorial;