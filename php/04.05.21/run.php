<?php

include "autoloader.php";

$calc = new NewCalc(2, 3);
echo $calc->sum();
echo "<br>";
echo $calc->mult();
echo "<br>";
echo $calc->diff();
echo "<br>";
echo $calc->div();


