<?php

$link = mysqli_connect("localhost", "root", "root", "guest_book");

if (!empty($_POST)) {
    $sql = "INSERT INTO `answers` (`name`, `review`, `source`, `phone`) VALUES ('$_POST[name]', '$_POST[review]',
    '$_POST[source]', '$_POST[phone]')";
    mysqli_query($link, $sql);
}
header("Location: thanks.php");
