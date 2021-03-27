<?php

$link = mysqli_connect("localhost", "root", "root",
    "questionnaire");

if (!empty($_POST)) {
    $sql = "INSERT INTO `answers` (`city`, `email`, `gender`, `age`) VALUES ('$_POST[city]', '$_POST[email]', 
    '$_POST[gender]', '$_POST[age]')";
    mysqli_query($link, $sql);
}
header("Location: thanks_page.php");
