<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Contact information</h1>
    <form action="?" method="post">
        <span>Name:</span><input name="name" type="text"><br><br>
        <span id="sur">Surname:</span><input name="surname" type="text"><br><br>
        <span>Email:</span><input name="email" type="text"><br><br>
        <span>Phone:</span><input name="phone" type="tel"><br><br>
        <span id="sn">Social network address:</span><input name="sn_address" type="text"><br><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>

<?php

if (!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["sn_address"])) {

    $str = $_POST["name"];

    $pat = "/^[A-ZА-ЯЁ][a-zа-яё]+$/u";

    if (preg_match($pat, $str)) {
        echo "<p>Name is correct</p>" . '<br>';
    } else {
        echo "<p>Name is not correct</p>" . '<br>';
    }

    $str1 = $_POST["surname"];

    $pat = "/^[A-ZА-ЯЁ][a-zа-яё]+$/u";

    if (preg_match($pat, $str1)) {
        echo "<p>Surname is correct</p>" . '<br>';
    } else {
        echo "<p>Surname is not correct</p>" . '<br>';
    }

    $str2 = $_POST["email"];

    // $pat1 = "/^(?:[A-Z\d]+(?:[-_.]?[A-Z\d]+)?@[A-Z\d_.-]+(?:\.?[A-Z\d]+)?\.[A-Z]{2,5})$/i";
    $pat1 = "/^(?:[A-Z\d]+(?:[-_.]?[A-Z\d]+)?@([A-Z\d_.-])+\.[A-Z]{2,6})$/iu";

    if (preg_match($pat1, $str2)) {
        echo "<p>Email is correct</p>" . '<br>';
    } else {
        echo "<p>Email is not correct</p>" . '<br>';
    }

    $str3 = $_POST["phone"];

    $pat2 = "/^\+375\(?(29|33|44|25)\)?+[\d]{7,7}$/u";

    if (preg_match($pat2, $str3)) {
        echo "<p>Phone is correct</p>" . '<br>';
    } else {
        echo "<p>Phone is not correct</p>" . '<br>';
    }

    $str4 = $_POST["sn_address"];

    $pat3 = "/^((https:\/\/)?(vk|ok|twitter)+\.(ru|com)+(\/id|\/@?)+[\da-z|\d|a-z]{3,9})$/iu";

    if (preg_match($pat3, $str4)) {
        echo "<p>Social network address is correct</p>" . '<br>';
    } else {
        echo "<p>Social network address is not correct</p>" . '<br>';
    }
} else {
    echo "<p>Attention, all fields not filled, fill in all fields!</p>";
}

$data = file_get_contents("data.txt");

if (!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["sn_address"])) {
    $row = "\n<======>\n" .
        $_POST["name"] . "\n" .
        $_POST["surname"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["phone"] . "\n" .
        $_POST["sn_address"] . "\n";
    file_put_contents("data.txt", $row, FILE_APPEND);
} 
// elseif (strpos($data, $row)) {
//     file_put_contents("data.txt", $row, LOCK_EX);
//     echo "<p>data is available in the database!</p>";
// }
