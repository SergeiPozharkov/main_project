<?php
$var1 = $_POST["var1"];
$var2 = $_POST["var2"];
$var3 = $_POST["var3"];
$x = $var1;
for ($i = $var1; $i <= $var2; $i += $var3) {
    echo $i . '<br>';
}
echo '<br>';
while ($x <= $var2) {
    echo $res . '<br>';
$x += $var3; 
}