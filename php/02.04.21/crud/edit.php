<?php

include_once "connect.php";

/**
 * @var mysqli $link connect to db
 * @var array $conf config data  file config
 */

$str = [];
foreach ($_POST as $field => $value) {
    if ($field != "id") {
        $str[] = "$field = '$value'";
    }
}

$sql = "UPDATE `{$conf['mysql']['table']}` SET " . implode(",", $str) . " WHERE id=$_POST[id]";

/** @var false|mysqli $link */
mysqli_query($link, $sql);
header("Location: show.php");