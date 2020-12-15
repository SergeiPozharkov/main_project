<?php
$var1 = $_POST["var1"];
$sum = 0;

for ($i = 1; $i <= $var1; $i++) {
    $sum += $i;
}
echo $sum ;
