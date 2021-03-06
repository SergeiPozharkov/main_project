<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

preg_match("/(\d)(\+|\-|\/|\*|\*\*)(\d)/", $_POST["field"], $data);

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

$res = match ($operation) {
    "+" => $num1 + $num2,
    "-" => $num1 - $num2,
    "/" => $num1 / $num2,
    "*" => $num1 * $num2,
    "**" => $num1 ** $num2,
    default => "operation un correct!",
};
echo "Результат = $res";
//print_r($resultOperation);
?>
<br>
<a href="main.php">Вернуться на главную страницу</a>
</body>
</html>
