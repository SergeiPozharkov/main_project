<?php


class Calc extends AbstractCalc
{

    public function sum()
    {
        return $this->a + $this->b;
    }

    public function mult()
    {
        return $this->a * $this->b;
    }
}