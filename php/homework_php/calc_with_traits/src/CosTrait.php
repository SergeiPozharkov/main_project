<?php


namespace App;


trait CosTrait
{
    /**
     * @return float
     */
    public function cosA(): float
    {
        return round(cos($this->a), 2);
    }
}