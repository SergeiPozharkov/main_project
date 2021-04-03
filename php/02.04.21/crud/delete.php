<?php

include_once "connect.php";
/** @var array $conf */

$sql = "DELETE FROM {$conf['mysql']['table']} WHERE id = $_GET[id]";
/** @var false|mysqli $link */
mysqli_query($link, $sql);

header("Location: show.php");
