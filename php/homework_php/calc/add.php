<?php

include "functions.php";

if (!empty($_POST["zero"])) {
    $zero = $_POST["zero"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $zero, FILE_APPEND);
} elseif (!empty($_POST["one"])) {
    $one = $_POST["one"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $one, FILE_APPEND);
} elseif (!empty($_POST["two"])) {
    $two = $_POST["two"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $two, FILE_APPEND);
} elseif (!empty($_POST["three"])) {
    $three = $_POST["three"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $three, FILE_APPEND);
} elseif (!empty($_POST["four"])) {
    $four = $_POST["four"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $four, FILE_APPEND);
} elseif (!empty($_POST["five"])) {
    $five = $_POST["five"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $five, FILE_APPEND);
} elseif (!empty($_POST["six"])) {
    $six = $_POST["six"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $six, FILE_APPEND);
} elseif (!empty($_POST["seven"])) {
    $seven = $_POST["seven"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $seven, FILE_APPEND);
} elseif (!empty($_POST["eight"])) {
    $eight = $_POST["eight"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $eight, FILE_APPEND);
} elseif (!empty($_POST["nine"])) {
    $nine = $_POST["nine"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", $nine, FILE_APPEND);
} elseif (!empty($_POST["plus"])) {
    $plus = $_POST["plus"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", " " . $plus . " ", FILE_APPEND);
} elseif (!empty($_POST["minus"])) {
    $minus = $_POST["minus"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", " " . $minus . " ", FILE_APPEND);
} elseif (!empty($_POST["multiply"])) {
    $multiply = $_POST["multiply"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", " " . $multiply . " ", FILE_APPEND);
} elseif (!empty($_POST["divide"])) {
    $divide = $_POST["divide"];
    file_get_contents("data.txt");
    file_put_contents("data.txt", " " . $divide . " ", FILE_APPEND);
}
header("location: main.php");
