<?php
$x = 4;
if ($x <= 3) {
    $y = $x ** 2;
} else {
    if ($x <= 5) {
        $y = $x + 5;
    } else {
        $y = sqrt($x);
    }
}
echo 'y' . ' = ' . $y;