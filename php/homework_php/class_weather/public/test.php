<?php

require "../vendor/autoload.php";

use classes\Weather;

$weather = new Weather();


echo $weather->setCityName("Minsk")->setTemperature(23)->weatherShow();