<?php


namespace classes;


class Weather
{
    protected string $cityName;
    protected string $temperature;

    /**
     * @param string $cityName
     * @return $this
     */
    public function setCityName(string $cityName): static
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @param string $temperature
     * @return Weather
     */
    public function setTemperature(string $temperature): static
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function weatherShow(): string
    {
        return "$this->cityName составила $this->temperature";
    }

}