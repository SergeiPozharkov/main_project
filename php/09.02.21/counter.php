<?php

$data = file_get_contents("count.txt");

$pat = "/\d/";

$rep = "<img src='images/$0.jpg>";

echo preg_replace($pat, $rep, $data);

file_put_contents("count.txt", ($data + 1));

echo $res;
