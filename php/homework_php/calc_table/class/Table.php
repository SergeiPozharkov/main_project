<?php


class Table
{
    public float $jobCost;
    public float $tableTop;
    public float $tableLegs;

    public function __construct($tableTop, $tableLegs, $jobCost)
    {
        $this->setJobCost($jobCost);
        $this->setTableTopDm($tableTop);
        $this->setTableLegsDm($tableLegs);
    }

    /** Высота ножек в дм.
     * @param float $tableLegs
     */
    public function setTableLegsDm(float $tableLegs): void
    {
        if ($tableLegs > 0) {
            $this->tableLegs = $tableLegs;
        }
    }

    /** Площадь столешницы в дм.
     * @param float $tableTop
     */
    public function setTableTopDm(float $tableTop): void
    {
        if ($tableTop > 0) {
            $this->tableTop = $tableTop;
        }
    }

    /** Стоимость работы.
     * @param float $jobCost
     */
    public function setJobCost(float $jobCost): void
    {
        $this->jobCost = $jobCost;
    }

    public function tableDm(): float
    {
        return $this->tableTop + $this->tableLegs + $this->jobCost;
    }

    public function tableSm(): float|int
    {
        return $this->tableTop / 100 + $this->tableLegs / 10 + $this->jobCost;
    }

    public function tableM(): float|int
    {
        return $this->tableTop * 100 + $this->tableLegs * 10 + $this->jobCost;
    }

    public function tableInch(): float
    {
        return $this->tableTop / 15.5 + $this->tableLegs / 3.93700787402 + $this->jobCost;
    }
}