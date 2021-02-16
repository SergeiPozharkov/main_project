<?php

$data = file_get_contents($_POST["text"]);
// echo $data;
$pat = '/<div class="news-entry">(.+?)<\/div>/isu';

preg_match($pat, $data, $result);

echo "<h1>Искомый текст</h1>";

print_r($result[0]);
