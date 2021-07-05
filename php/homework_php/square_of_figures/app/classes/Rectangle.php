<?php


namespace classes;


class Rectangle implements ISquare
{

    protected float $a;
    protected float $b;

    /**
     * @param float $a
     * @return Rectangle
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     * @return Rectangle
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }

    /**
     * Метод расчета площади прямоугольника
     * @return float
     */
    public function figureSquare(): float
    {
        return $this->a * $this->b;
    }


}