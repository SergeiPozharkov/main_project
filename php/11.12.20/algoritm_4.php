<?php
$a = 20;
if ($a < 100) {
    $x = $a * 2.553;
} elseif ($a >= 100 and $a < 10000) {
    $x = $a * 2.552;
} else {
    $x = $a * 2.551;
}
echo 'x' . ' = ' . $x;
