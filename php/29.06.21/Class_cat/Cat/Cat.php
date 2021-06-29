<?php

namespace Cat;

class Cat
{
    protected IGost $food;
    protected float $calories = 0;

    public function eat(IGost $food): static
    {
        $this->food = $food;
        $this->calories += $this->food->calories();
        return $this;
    }

    public function full(): float
    {
        return $this->calories;
    }
}