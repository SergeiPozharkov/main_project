<?php

$str = 'BROD, BEAR, BRuT';
$chars = preg_split('/b|d/i', $str);
print_r($chars);
