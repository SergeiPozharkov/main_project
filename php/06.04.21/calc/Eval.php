<?php

include_once "Calc.php";

$calc = new Calc($_POST["a"], $_POST["b"]);

//echo "Произведение = " . $calc->multiply() . "<br>";
//echo "Частное = " . $calc->divide() . "<br>";
//echo "Разность = " . $calc->difference() . "<br>";
echo "Результат = " . $calc->{$_POST["operation"]}() . "<br>";
echo "<a href='index.html'>Вернуться</a>";
