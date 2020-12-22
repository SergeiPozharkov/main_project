<?php

$arr = array(5 => 1, 12 => 2);
$arr[] = 56;
print_r($arr);
echo '<br>';
$arr['x'] = 42;
print_r($arr);
echo '<br>';
unset($arr[5]);
print_r($arr);
echo '<br>';
unset ($arr);
print_r($arr);