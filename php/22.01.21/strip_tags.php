<?php

$data = file_get_contents("https://www.lipsum.com/feed/html");
echo $data;
$dataFormat = strip_tags($data, 'p, h1, em, b');

echo $dataFormat;