<?php

$handle = fopen("https://avia.yandex.ru/", "r");
$contents = '';
while(!feof($handle)){
    $contents .= fread($handle, 1);
}
fclose($handle);
echo $contents;