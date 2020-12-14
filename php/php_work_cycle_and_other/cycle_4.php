<?php
$array = range(1, 100);
shuffle($array);
$x = 1;

foreach ($array as $value) {
    if (($x++ % 10) == 0) {
        $str .= $value . "<br>";
    } else {
        $str .= $value . '&nbsp;';
    }
    echo $str;
}
//или
// $str .= (($x++ % 10) == 0) ? ($value . "<br>") : ($value . '&nbsp;');
// " ?: " - тернарный оператор;
// " .= " - оператор присваивания с конкатенацией, который присоединяет правый аргумент к левому.