<?php


namespace classes;


class Blurb
{
    protected ICar $iCar;

    public function __construct(ICar $iCar)
    {
        $this->iCar = $iCar;
    }

    public function blurbGeneration(): void
    {
        echo "Продается машина марки {$this->iCar->name()}, имеющая следующие параметры:<br><ul>
        <li>Цвет - {$this->iCar->color()}</li>
        <li>Максимальная скорость - {$this->iCar->maxSpeed()} км/ч</li>
        <li>Расход топлива - {$this->iCar->consumptionFuel()} л.</li>
        <li>Объем двигателя - {$this->iCar->engineVolume()} л.</li>
        </ul> по цене {$this->iCar->price()}  бел.руб. (торг уместен)";
    }

    /**
     * @param ICar $iCar
     * @return $this
     */
    public function setICar(ICar $iCar): static
    {
        $this->iCar = $iCar;
        return $this;
    }

}