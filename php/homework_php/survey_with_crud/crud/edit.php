<?php

include_once "../connect/connect.php";

$sql = "UPDATE `answers` SET `city`= '$_POST[city]',`email`='$_POST[email]',`gender`='$_POST[gender]',
`age`='$_POST[age]' WHERE id=$_POST[id]";

/** @var false|mysqli $link */
mysqli_query($link, $sql);
header("Location: show.php");