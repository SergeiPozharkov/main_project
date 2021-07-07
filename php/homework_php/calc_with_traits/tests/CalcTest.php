<?php

use PHPUnit\Framework\TestCase;
use App\Calc;

class CalcTest extends TestCase
{

    public function testSqrtA()
    {
        $calc = new Calc();
        $this->assertEquals(5, $calc->setA(25)->sqrtA());
    }

    public function testSinA()
    {
        $calc = new Calc();
        $this->assertEquals(-0.71, $calc->setA(150)->sinA());
    }

    public function testCosA()
    {
        $calc = new Calc();
        $this->assertEquals(0.15, $calc->setA(30)->cosA());
    }

    public function testAbsA()
    {
        $calc = new Calc();
        $this->assertEquals(2, $calc->setA(-2)->absA());
    }

    public function testExpA()
    {
        $calc = new Calc();
        $this->assertEquals(4, $calc->setA(2)->expA());
    }
}
