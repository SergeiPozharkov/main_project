<?php


namespace App;


trait StrlenTrait
{
    public function strStrlen(): int
    {
        return strlen($this->str);
    }
}