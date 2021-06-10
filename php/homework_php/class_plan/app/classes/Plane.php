<?php

namespace classes;

class Plane
{

    /**
     * Кол-во пассажиров на борту самолета
     * @var int
     */
    protected int $passengerCount;

    /**
     * Кол-во мест на борту самолета
     * @var int
     */
    protected int $placeCount;
    /**
     * Запас топлива в баке
     * @var float
     */
    protected float $fuel;
    /**
     * Расход топлива
     * @var float
     */
    protected float $fuelConsumption;

    public function __construct($passengerCount, $placeCount, $fuel, $fuelConsumption)
    {
        $this->setPassengerCount($passengerCount);
        $this->setPlaceCount($placeCount);
        $this->setFuel($fuel);
        $this->setFuelConsumption($fuelConsumption);
    }

    /**
     * @param int $passengerCount
     * @return Plane
     */
    public function setPassengerCount(int $passengerCount): static
    {
        $this->passengerCount = $passengerCount;
        return $this;
    }

    /**
     * @param int $placeCount
     * @return Plane
     */
    public function setPlaceCount(int $placeCount): static
    {
        $this->placeCount = $placeCount;
        return $this;
    }

    /**
     * @param float $fuel
     * @return Plane
     */
    public function setFuel(float $fuel): static
    {
        $this->fuel = $fuel;
        return $this;
    }

    /**
     * @param float $fuelConsumption
     * @return Plane
     */
    public function setFuelConsumption(float $fuelConsumption): static
    {
        $this->fuelConsumption = $fuelConsumption;
        return $this;
    }

    /**
     * Метод который вычисляет дальность полета
     * @return float|int|string
     */
    public function rangeFlight(): float|int|string
    {
        return "Дальность полета = " . $this->fuel / $this->fuelConsumption . " Км";
    }

    /**
     * Метод который вычисляет количество свободных мест
     * @return int|string
     */
    public function freePlacesCount(): int|string
    {
        return "Количество свободных мест = " . $this->placeCount - $this->passengerCount;
    }

}