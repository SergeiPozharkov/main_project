<?php
$a = 20;
$b = 30;
$c = 3;
//округление в большую сторону
$x = ceil($a / $c);
$y = ceil($b / $c);
$z = $x * $y;
echo $z;