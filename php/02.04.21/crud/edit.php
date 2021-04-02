<?php

include_once "connect.php";

/**
 * @var mysqli $link connect to db
 * @var array $conf config data  file config
 */

$str = [];
foreach ($_POST as $field => $value) {
    if ($field != "id") {
        $str[] = "$field = `$value`";
    }
}
implode(",", $str);
$sql = "UPDATE `{$conf['mysql']['table']}` SET " . implode(",", $str) . " WHERE id=$_POST[id]";
//$sql = "UPDATE `answers` SET `city`= '$_POST[city]',`email`='$_POST[email]',`gender`='$_POST[gender]',
//`age`='$_POST[age]' WHERE id=$_POST[id]";

/** @var false|mysqli $link */
mysqli_query($link, $sql);
header("Location: show.php");