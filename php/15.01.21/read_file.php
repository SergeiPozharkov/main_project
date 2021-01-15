<?php

$fp = fopen("file.txt", "r");
echo fread($fp, filesize("file.txt"));
fclose($fp);