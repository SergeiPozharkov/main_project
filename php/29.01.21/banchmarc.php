<?php

$time_start = microtime(1);

for ($i=0; $i < 1000; $i++) { 
    //Ничего не делает 1000 раз. 
}
$time_end = microtime(1);
$time = $time_end - $time_start;

echo "runtime - $time"; 