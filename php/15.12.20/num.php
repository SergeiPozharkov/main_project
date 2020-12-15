<?php
$var1 = $_POST["var1"];
$var2 = $_POST["var2"];
$var3 = $_POST["var3"];

if ($var1 > $var2) {
    $x = $var1;
} else {
    $x = $var2;
}
if ($x > $var3) {
    $max = $x;
} else {
    $max = $var3;
}
echo $max . '<br>';
echo max($var1, $var2, $var3);
