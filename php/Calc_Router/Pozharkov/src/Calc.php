<?php

namespace src;

class Calc
{
    protected $a;
    protected $b;

    /**
     * @param float $a
     * @return $this
     */
    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     * @return $this
     */
    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }

}