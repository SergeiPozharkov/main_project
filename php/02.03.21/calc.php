<?php

preg_match("/(\d)(\+|\-|\/|\*)(\d)/", $_POST["fild"], $data);
print_r($data);
$num1 = $data[1];
$num2 = $data[3];
$operation = $data[2];

//switch ($operation) {
//    case "+";
//        $result = $num1 + $num2;
//        break;
//    case "-";
//        $result = $num1 - $num2;
//        break;
//    case "/";
//        $result = $num1 / $num2;
//        break;
//    case "*";
//        $result = $num1 * $num2;
//        break;
//    default:
//        $result = "operation un correct!";
//}
//echo $result;

echo match ($operation) {
    "+" => $num1 + $num2,
    "-" => $num1 - $num2,
    "/" => $num1 / $num2,
    "*" => $num1 * $num2,
    default => "operation un correct!"

};