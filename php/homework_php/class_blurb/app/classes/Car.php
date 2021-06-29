<?php


namespace classes;


class Car implements ICar
{
    public function __construct(
        protected string $name,
        protected string $color,
        protected float $price,
        protected float $maxSpeed,
        protected float $engineVolume,
        protected float $consumptionFuel)
    {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function maxSpeed(): float
    {
        return $this->maxSpeed;
    }

    public function consumptionFuel(): float
    {
        return $this->consumptionFuel;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function color(): string
    {
        return $this->color;
    }

    public function engineVolume(): float
    {
        return $this->engineVolume;
    }
}