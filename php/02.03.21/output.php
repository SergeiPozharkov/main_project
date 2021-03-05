<?php

ini_set('display_errors', 'Off');

$resultOperation = json_decode(file_get_contents("data.json"), true);

echo $resultOperation[0]['res'];

