<?php

$text = file_get_contents("https://www.php.net/manual/ru/indexes.output.php");

echo substr_count($text, '<a href="function');