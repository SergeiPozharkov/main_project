<?php


namespace App;


trait SqrtTrait
{
    /**
     * @return float
     */
    public function sqrtA(): float
    {
        return sqrt($this->a);
    }
}