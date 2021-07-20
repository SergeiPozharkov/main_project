<?php


namespace App;


abstract class Figure implements IFigure
{
    use SquareTrait;
    use PerimeterTrait;
}