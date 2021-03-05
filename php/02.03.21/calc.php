<?php

preg_match("/(\d)(\+|\-|\/|\*)(\d)/", $_POST["field"], $data);

//print_r($data);
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

$result = match ($operation) {
    "+" => $num1 + $num2,
    "-" => $num1 - $num2,
    "/" => $num1 / $num2,
    "*" => $num1 * $num2,
    "**" => $num1 ** $num2,
    default => "operation un correct!",
};

$resultOperation = json_decode(file_get_contents("data.json"));

$resultOperation[] = ['res' => $result];
file_put_contents('data.json', json_encode($resultOperation));
header("location: main.php");
//print_r($resultOperation);
//}
//}