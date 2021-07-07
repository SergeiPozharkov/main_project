<?php


namespace App;


class Calc
{
    protected float $a;

    /**
     * @param float $a
     * @return Calc
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    use SinTrait;
    use CosTrait;
    use AbsTrait;
    use SqrtTrait;
    use ExpTrait;
}