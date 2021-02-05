<?php

$data = file_get_contents("https://www.onliner.by/");
$pat = "/Минск(.*?)\b/iu";

echo preg_match_all($pat, $data, $arr);

print_r($arr);