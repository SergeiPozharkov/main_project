<?php

namespace tests;

use App\Triangle;
use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    private Triangle $triangle;

    protected function setUp(): void
    {
        $this->triangle = new Triangle();
    }

    public function testPerimeter(): void
    {
        $this->assertEquals(10, $this->triangle->setA(3)->setB(5)->setC(2)->perimeter());
        $this->assertIsFloat($this->triangle->setA(3)->setB(5)->setC(2)->perimeter());
    }

    public function testSquare(): void
    {
        $this->assertEquals(7.5, $this->triangle->setA(3)->setH(5)->square());
        $this->assertIsFloat($this->triangle->setA(3)->setH(5)->square());
    }
}
