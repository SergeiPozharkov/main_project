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
    return preg_match_all("/.*дурак.*/iu", $text);
}
