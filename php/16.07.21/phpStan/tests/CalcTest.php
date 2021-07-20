<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Calc;

class CalcTest extends TestCase
{
    private Calc $calc;

    protected function setUp(): void
    {
        $this->calc = new Calc();
    }

    public function testSum(): void
    {
        $this->assertEquals(4, $this->calc->setA(2)->setB(2)->sum());
    }
}
