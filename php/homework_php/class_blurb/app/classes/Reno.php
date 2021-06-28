<?php


namespace classes;


class Reno implements ICar
{

    protected string $name;
    protected float $maxSpeed;
    protected float $consumptionFuel;
    protected float $price;
    protected string $color;
    protected float $engineVolume;


    public function __construct(string $name, string $color, float $price, float $maxSpeed, float $engineVolume,
                                float $consumptionFuel)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->maxSpeed = $maxSpeed;
        $this->engineVolume = $engineVolume;
        $this->consumptionFuel = $consumptionFuel;
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