<?php

namespace tests;

use App\Rectangle;

use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    private Rectangle $rectangle;

    protected function setUp(): void
    {
        $this->rectangle = new Rectangle();
    }

    public function testSquare(): void
    {
        $this->assertEquals(6, $this->rectangle->setA(3)->setB(2)->square());
        $this->assertIsFloat($this->rectangle->setA(3)->setB(2)->square());
    }

    public function testPerimeter(): void
    {
        $this->assertEquals(10, $this->rectangle->setA(3)->setB(2)->perimeter());
        $this->assertIsFloat($this->rectangle->setA(3)->setB(2)->perimeter());
    }
}
