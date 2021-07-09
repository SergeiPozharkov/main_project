<?php

namespace tests;

use App\CalcForStrings;
use PHPUnit\Framework\TestCase;

class CalcForStringsTest extends TestCase
{
    private CalcForStrings $calc;

    protected function setUp(): void
    {
        $this->calc = new  CalcForStrings();
    }

    public function testStrStrlen()
    {
        $this->assertEquals(5, $this->calc->setStr("dkfjd")->strStrlen());
    }

    public function testNumericCount()
    {
        $this->assertEquals(7, $this->calc->setStr("dkfjdkfjdfkjdf1234dfjdfk123")->numericCount());
    }

    public function testLowerCaseCount()
    {
        $this->assertEquals(6, $this->calc->setStr("dkl,.fkd-")->lowerCaseCount());
    }

    public function testSymbolsCount()
    {
        $this->assertEquals(8, $this->calc->setStr("dkl,.fkdfl.-,k12132,.-")->symbolsCount());
    }

    public function testUpperCaseCount()
    {
        $this->assertEquals(4, $this->calc->setStr("dkAl,.fDSPfl.")->upperCaseCount());
    }
}
