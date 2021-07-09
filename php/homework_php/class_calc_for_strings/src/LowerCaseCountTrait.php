<?php


namespace App;


trait LowerCaseCountTrait
{
    public function lowerCaseCount(): bool|int|null
    {
        return preg_match_all("/[a-z]/", $this->str);

    }
}