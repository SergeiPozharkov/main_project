<?php

include_once "Calc.php";

$calc = new AbstractCalc($_POST["num"]);

echo "Результат = " . $calc->{$_POST["operation"]}() . "<br>";
echo "<a href='index.html'>Вернуться</a>";
