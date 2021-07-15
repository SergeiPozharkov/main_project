<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\PassValidation;

class PassValidationTest extends TestCase
{
    private PassValidation $pass;

    protected function setUp(): void
    {
        $this->pass = new PassValidation();
    }

    public function testOtherSymbolsCheck()
    {
        $this->assertEquals(true, $this->pass->setPass('CVJFKGJFKGJFGKJ')->otherSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('kdfjdkjfdkfjdf')->otherSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('12398984748478')->otherSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('1239kfjfkgjfkgj')->otherSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('kfjfkgjfkgj49509')->otherSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('1239DKJFKJGFKGJFKG')->otherSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('KFJGFKGJFGKJ49509')->otherSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('FJGKJlfkgflgk49509')->otherSymbolsCheck());
    }

    public function testTopLowerCaseExists()
    {
        $this->assertEquals(true, $this->pass->setPass('HOkdfjdkjfdkfjdf')->topLowerCaseExists());
        $this->assertEquals(true, $this->pass->setPass('kdfjdkjfHOdkfjdf')->topLowerCaseExists());
        $this->assertEquals(true, $this->pass->setPass('kdfjdkjfdkfjdfHO')->topLowerCaseExists());
    }

    public function testArabicNumericCheck()
    {
        $this->assertEquals(true, $this->pass->setPass('123456')->arabicNumericCheck());
    }

    public function testMaxLimitSymbols()
    {
        $this->assertEquals(true, $this->pass->setPass('kloremipsumdolorsitametconsectetueradipiscingelit
sddiamnonummynibheuismodtinciduntutlaoreetoloremagnaaliqfggfdfdfsdalhaafgrgrt')->maxLimitSymbols());
        $this->assertEquals(true, $this->pass->setPass('kloremipsumdolorsicingelits')->maxLimitSymbols());
        $this->assertEquals(true, $this->pass->setPass('kloremipsumdolorsicingelits2390230923')->maxLimitSymbols());
    }

    public function testMinLimitSymbols()
    {
        $this->assertEquals(true, $this->pass->setPass('5540454505kfjfkj')->minLimitSymbols());
        $this->assertEquals(true, $this->pass->setPass('kfjfkj3454948594')->minLimitSymbols());
    }

    public function testLatinSymbolsCheck()
    {
        $this->assertEquals(true, $this->pass->setPass('fkgjfgkjfgkjfgkfjg')->latinSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('LFKFLKGFLKGFGLSDMDKLMAKML')->latinSymbolsCheck());
    }

    public function testSpaceCheck()
    {
        $this->assertEquals(true, $this->pass->setPass('FJGKFKGJFKGJ475475645')->spaceCheck());
        $this->assertEquals(true, $this->pass->setPass('dhgjdfhdjhsfhjdfhjdfhjdfhj475475645')->spaceCheck());
    }

    public function testCyrillicSymbolsCheck()
    {
        $this->assertEquals(true, $this->pass->setPass('укдлукдлукдулкдулкдулкдулку')->cyrillicSymbolsCheck());
        $this->assertEquals(true, $this->pass->setPass('АПДЛПЛДАПЛДАПЛДПАЛДАПЛДАПЛДП')->cyrillicSymbolsCheck());
    }

    public function testMinNumberCount()
    {
        $this->assertEquals(true, $this->pass->setPass('1')->minNumberCount());
        $this->assertEquals(true, $this->pass->setPass('1457485')->minNumberCount());
        $this->assertEquals(true, $this->pass->setPass('fgkfjgkfjg1457485')->minNumberCount());
        $this->assertEquals(true, $this->pass->setPass('12fgkfjgkfjg')->minNumberCount());
    }
}
