<?php


namespace App;


trait AbsTrait
{
    /**
     * @return float|int
     */
    public function absA(): float|int
    {
        return abs($this->a);

    }
}