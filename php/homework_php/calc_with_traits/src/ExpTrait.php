<?php


namespace App;


trait ExpTrait
{
    /**
     * @return int
     */
    public function expA(): int
    {
        return $this->a ** 2;
    }
}