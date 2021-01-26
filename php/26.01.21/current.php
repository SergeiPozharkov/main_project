<?php

$arr = ['one', 'two', 'three'];

echo current($arr) . "<br>\n";
next($arr);
echo current($arr) . "<br>\n";
reset($arr);
echo current($arr) . "<br>\n";
end($arr);
echo current($arr) . "<br>\n";