<?php


class NewCalc extends Calc
{
    public function diff()
    {
        return $this->a - $this->b;
    }

    public function div()
    {
        return $this->a / $this->b;

    }

}