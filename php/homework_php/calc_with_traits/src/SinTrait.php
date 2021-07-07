<?php


namespace App;


trait SinTrait
{
    /**
     * @return float
     */
    public function sinA(): float
    {
        return round(sin($this->a), 2);
    }
}