<?php

include_once "../connect/connect.php";

$sql = "DELETE FROM answers WHERE id = $_GET[id]";
/** @var false|mysqli $link */
mysqli_query($link, $sql);

header("Location: show.php");
