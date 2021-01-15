<?php

$file = "counter.txt";

$fp = fopen($file, "r");
$counter = fread($fp, filesize($file));
fclose($fp);

echo $counter; // or echo ++$counter;

$fp = fopen($file, "w+");
fwrite($fp, $counter + 1);
fclose($fp);
