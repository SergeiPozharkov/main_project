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
if(preg_match("/\dдурак\d/iu",$text)){
    return "есть плохое слово";
}
}
