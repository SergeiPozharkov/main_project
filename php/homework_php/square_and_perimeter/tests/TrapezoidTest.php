<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Trapezoid;

class TrapezoidTest extends TestCase
{
    private Trapezoid $trapezoid;

    protected function setUp(): void
    {
        $this->trapezoid = new Trapezoid();
    }

    public function testSquare(): void
    {
        $this->assertEquals(18, $this->trapezoid->setA(9)->setB(3)->setH(3)->square());
        $this->assertIsFloat($this->trapezoid->setA(9)->setB(3)->setH(3)->square());
    }

    public function testPerimeter(): void
    {
        $this->assertEquals(37, $this->trapezoid->setA(15)->setB(10)->setC(7)->setD(5)->perimeter());
        $this->assertIsFloat($this->trapezoid->setA(15)->setB(10)->setC(7)->setD(5)->perimeter());
    }
}
