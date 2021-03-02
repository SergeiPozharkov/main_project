<?php

if (!empty(file_get_contents("data.txt")) && isset($_POST['equality'])) {
    include "functions.php";
    calculated();
} elseif (isset($_POST['clear'])) {
    $file = fopen('data.txt', 'w');
    ftruncate($file, 0);
    fclose($file);
} elseif (empty(file_get_contents("data.txt")) && isset($_POST['equality'])) {
    echo "Операция не задана!";
} elseif (!empty(file_get_contents("data.txt"))) {
    include "functions.php";
    operation();
}
