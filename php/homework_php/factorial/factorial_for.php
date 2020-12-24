<?php
$n = 5;
$calcFactorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $calcFactorial = $calcFactorial * $i;
}
echo $n . '! = ' . $calcFactorial;
