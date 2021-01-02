<?php

$arr = [1, 2 => 'two', 3, 4, 5];

foreach ($arr as $value) {
    echo "$value<br>";
}

foreach ($arr as $key => $value) {
    echo '$key = $value<br>';
}