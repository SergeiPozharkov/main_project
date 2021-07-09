<?php


namespace App;


trait UpperCaseCountTrait
{
    public function upperCaseCount(): bool|int|null
    {
        return preg_match_all("/[A-Z]/", $this->str);

    }
}