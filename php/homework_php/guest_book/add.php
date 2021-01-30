<?php

if ((!empty($_POST)) && ($_POST["name"] != "") && ($_POST["email"] != "") && ($_POST["text"] != "")) {
    $row = "\n<======>\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"] . "\n" .
        $dateTime = date("d-m-Y H:i:s");
    file_put_contents("guest_data.txt", $row, FILE_APPEND);
    header("Location: ?");
    die();  // or exit()
}
