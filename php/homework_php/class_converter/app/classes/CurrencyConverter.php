<?php

namespace classes;

class CurrencyConverter
{
    /**
     * Сумма в бел.руб.
     * @var float
     */
    protected float $belRubSum;

    public function __construct($belRubSum)
    {
        $this->setBelRubSum($belRubSum);
    }

    /**
     * @param float $belRubSum
     * @return $this
     */
    public function setBelRubSum(float $belRubSum): static
    {
        $this->belRubSum = $belRubSum;
        return $this;
    }

    /**
     * Перевод в рос.руб.
     * @return float
     */
    public function ConvertToRub(): float
    {
        $convertRes = $this->belRubSum * 28.88;
        if ($convertRes > 100000) {
            return $this->belRubSum * 30;
        }
        return $convertRes;
    }

    /**
     * Перевод в доллары США
     * @return float
     */
    public function ConvertToUsd(): float
    {
        $convertRes = $this->belRubSum * 0.4;
        if ($convertRes > 1000) {
            return $this->belRubSum * 0.5;
        }
        return $convertRes;
    }

    /**
     * Перевод в евро
     * @return float
     */
    public function ConvertToEur(): float
    {
        $convertRes = $this->belRubSum * 0.33;
        if ($convertRes > 1000) {
            return $this->belRubSum * 0.4;
        }
        return $convertRes;
    }

    /**
     * Перевод в фунты стерлинги
     * @return float
     */
    public function ConvertToGbp(): float
    {
        $convertRes = $this->belRubSum * 0.28;
        if ($convertRes > 1000) {
            return $this->belRubSum * 0.4;
        }
        return $convertRes;
    }

    /**
     * Перевод в канадские доллары
     * @return float
     */
    public function ConvertToCad(): float
    {
        $convertRes = $this->belRubSum * 0.49;
        if ($convertRes > 1000) {
            return $this->belRubSum * 0.6;
        }
        return $convertRes;
    }

    /**
     * Переконвертирует ин.валюту в бел.руб.
     * @param float $methodResult
     * @return float
     */
    public function ConvertToByn(float $methodResult): float
    {
        if ($this->ConvertToCad() == $methodResult) {
            return $methodResult * 2.05;
        }

        if ($this->ConvertToGbp() == $methodResult) {
            return $methodResult * 3.51;
        }

        if ($this->ConvertToEur() == $methodResult) {
            return $methodResult * 3.01;
        }

        if ($this->ConvertToUsd() == $methodResult) {
            return $methodResult * 2.49;
        }

        if ($this->ConvertToRub() == $methodResult) {
            return $methodResult * 0.03;
        }
    }

}