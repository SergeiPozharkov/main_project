<?php

namespace App;

interface IFigure
{
    public function square(): float|int;

    public function perimeter(): float|int;
}