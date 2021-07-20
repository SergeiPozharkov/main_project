<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Rhombus;

class RhombusTest extends TestCase
{
    private Rhombus $rhombus;

    protected function setUp(): void
    {
        $this->rhombus = new Rhombus();
    }

    public function testSquare(): void
    {
        $this->assertEquals(45, $this->rhombus->setA(9)->setH(5)->square());
        $this->assertIsFloat($this->rhombus->setA(9)->setH(5)->square());
    }

    public function testPerimeter(): void
    {
        $this->assertEquals(20, $this->rhombus->setA(5)->perimeter());
        $this->assertIsFloat($this->rhombus->setA(5)->perimeter());
    }
}
