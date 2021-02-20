<?php

function smile($text)
{
    return preg_replace([
        "/\:\)/",
        "/\:\(/",
        "/\;\)/"
    ], [
        "😃",
        "😐",
        "😉"
    ], $text);
}

function censure($text)
{
if(preg_match("/дурак/iu",$text)){
    return "есть плохое слово";
}
}
