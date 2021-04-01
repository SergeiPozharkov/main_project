<?php

include_once "../connect/connect.php";

if (!empty($_POST)) {
    $sql = "INSERT INTO `answers` (`city`, `email`, `gender`, `age`) VALUES ('$_POST[city]', '$_POST[email]', 
    '$_POST[gender]', '$_POST[age]')";
    /** @var false|mysqli $link */
    mysqli_query($link, $sql);
}

header("Location: ../thanks_page.php");

//header("Location: show.php");
