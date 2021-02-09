<?php

$data = file_get_contents("https://www.who.int/ru/emergencies/diseases/novel-coronavirus-2019");
$pat = "/\bcovid-19\b/iu";
$res = preg_match_all($pat, $data, $arr);
echo $res;
print_r($arr);