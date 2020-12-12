<?php
$many = 100;
$month = 7;
$percent = 1.5;
$s = $many;

for ($i = 1; $i <= $month; $i++) {
    $s = ($s / 100 * $percent);
}

echo  round($s, 2);