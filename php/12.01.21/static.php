<?php

function Test(){
    static $a = 0;
    echo $a;
    $a++;
}

echo Test(); //0
echo Test(); //2
echo Test(); //3
echo Test(); //4
echo Test(); //5
echo Test(); //6
echo Test(); //7
echo Test(); //8
echo Test(); //9
echo Test(); //10
