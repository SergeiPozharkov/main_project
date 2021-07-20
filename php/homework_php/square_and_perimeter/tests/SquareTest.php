<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Square;

class SquareTest extends TestCase
{
    private \App\Square $square;


    protected function setUp(): void
    {
        $this->square = new Square();
    }

    public function testPerimeter(): void
    {
        $this->assertEquals(12, $this->square->setA(3)->perimeter());
        $this->assertIsFloat($this->square->setA(3)->perimeter());

    }

    public function testSquare(): void
    {
        $this->assertEquals(9, $this->square->setA(3)->square());
        $this->assertIsFloat($this->square->setA(3)->square());
    }
}
