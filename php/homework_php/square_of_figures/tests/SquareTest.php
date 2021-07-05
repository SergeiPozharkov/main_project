<?php

use PHPUnit\Framework\TestCase;
use classes\Square;
use classes\Rectangle;
use classes\RightTriangle;

class SquareTest extends TestCase
{

    public function testSquare()
    {
        $square = new Square();
        $this->assertEquals(4, $square->setA(2)->figureSquare());
    }

    public function testRectangle()
    {
        $rectangle = new Rectangle();
        $this->assertEquals(6, $rectangle->setA(3)->setB(2)->figureSquare());
    }

    public function testRectTriangle()
    {
        $rectTriangle = new RightTriangle();
        $this->assertEquals(3, $rectTriangle->setA(3)->setB(2)->figureSquare());
    }
}