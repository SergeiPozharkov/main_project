<?php


namespace App;


trait NumericCountTrait
{
    public function numericCount(): bool|int|null
    {
        return preg_match_all("/[0-9]/", $this->str);

    }
}