<?php


namespace App;


trait SymbolsCountTrait
{
    public function symbolsCount(): bool|int|null
    {
        return preg_match_all("/[.,-]/", $this->str);

    }
}