<!DOCTYPE html>
<html lang="en/ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Captcha check</h1>
    <?php
    $num = rand(10, 99);
    echo "You are not a robot?<br>Enter numbers to continue: $num words (separated by space) in the field below";
    echo "<br>";
    ?>
    <br>
    <form action="?" method="post">
        <span>Enter captcha: </span>
        <input type="text" name="userNumber">
        <input type="hidden" name="number" value="<?= $num ?>">
        <input type="submit" value="check">
    </form>
</body>

</html>

<?php

//var #2

if (!empty($_POST["userNumber"])) {

    $number = $_POST["number"];
    $data = $_POST["userNumber"];
    $arrWords = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];

    $pat = "/.*(" . $arrWords[$number[0]] . ")\s+(" . $arrWords[$number[1]] . ").*/iu";

    if (preg_match($pat, $data)) {
        echo "Verification complet, you are not a robot!";
    } else {
        echo "You are a robot!";
    }
} else {
    echo "Please enter captcha";
}
 //var #1

// $num = "1 2 3";
//  $data = $_POST["text"];

// $res = preg_replace(
//     [
//         "/ноль/",
//         "/один/",
//         "/два/",
//         "/три/",
//         "/четыре/",
//         "/пять/",
//         "/шесть/",
//         "/сем/",
//         "/восемь/",
//         "/девять/"
//     ],
//     [
//         0,
//         1,
//         2,
//         3,
//         4,
//         5,
//         6,
//         7,
//         8,
//         9
//     ],
//     $data
// );
// //echo $inputNumber . "<br>";
// //echo $random;

// if ($res == $num) {
//     echo "ok";
// } else {
//     echo "not ok";
// }