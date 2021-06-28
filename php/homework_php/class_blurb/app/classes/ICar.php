<?php


namespace classes;


interface ICar
{
    public function name(): string;

    public function maxSpeed(): float;

    public function consumptionFuel(): float;

    public function price(): float;

    public function color(): string;

    public function engineVolume(): float;
}