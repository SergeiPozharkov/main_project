<?php
$a = 3;
$b = 1;
$x = 2;
$e = 4;
$y = ($a * $x + 2 * $b * ($x**2)) * abs(cos($x**2))/pi()*($e**$x); // или же M_PI
echo $y;