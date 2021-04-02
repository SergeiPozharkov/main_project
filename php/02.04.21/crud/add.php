<?php

include_once "connect.php";

/**
 * @var mysqli $link connect to db
 * @var array $conf config data  file config
 */

if (!empty($_POST)) {
    $fields = fieldsList($link, $conf["mysql"]["table"]);

    $sql = "INSERT INTO `{$conf['mysql']['table']}` (" . implode(", ", $fields) . ") VALUES (" . '""' . implode("' , '", $_POST) . '""' . ")";
    mysqli_query($link, $sql);
}
header("Location: show.php");
