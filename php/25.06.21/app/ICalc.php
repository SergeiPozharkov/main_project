<?php

namespace app;

interface ICalc
{
    /**
     * @param float $a
     */
    public function setA(float $a): static;

    /**
     * @param float $b
     * @return Calc
     */
    public function setB(float $b): static;

    public function sum(): float;

    /**
     * @return float
     */
    public function mult(): float;
}