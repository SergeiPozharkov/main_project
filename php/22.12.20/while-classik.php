<?php

$i = 1;

while ($i <= 10) {
    echo $i++ . '&nbsp;';
}
echo '<br>';

// or

$a = 1;

while ($a <= 10) :
    echo $a . '&nbsp;';
    $a++;
endwhile;
