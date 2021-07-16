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
        $this->assertFalse($this->pass->setPass('CVJFKGJFKGJFGKJ,;')->otherSymbolsCheck());
        $this->assertTrue($this->pass->setPass('CVJFKGJFKGJFGKJ')->otherSymbolsCheck());
        $this->assertTrue($this->pass->setPass('kdfjdkjfdkfjdf')->otherSymbolsCheck());
        $this->assertTrue($this->pass->setPass('12398984748478')->otherSymbolsCheck());
        $this->assertTrue($this->pass->setPass('1239kfjfkgjfkgj')->otherSymbolsCheck());
        $this->assertTrue($this->pass->setPass('kfjfkgjfkgj49509')->otherSymbolsCheck());
        $this->assertTrue($this->pass->setPass('1239DKJFKJGFKGJFKG')->otherSymbolsCheck());
        $this->assertTrue($this->pass->setPass('KFJGFKGJFGKJ49509')->otherSymbolsCheck());
        $this->assertTrue($this->pass->setPass('FJGKJlfkgflgk49509')->otherSymbolsCheck());
    }

    public function testTopLowerCaseExists()
    {
        $this->assertFalse($this->pass->setPass('1234567')->topLowerCaseExists());
        $this->assertFalse($this->pass->setPass('HO')->topLowerCaseExists());
        $this->assertFalse($this->pass->setPass('kdfjdkjfdkfjdf')->topLowerCaseExists());
        $this->assertTrue($this->pass->setPass('HOkdfjdkjfdkfjdf')->topLowerCaseExists());
        $this->assertTrue($this->pass->setPass('kdfjdkjfHOdkfjdf')->topLowerCaseExists());
        $this->assertTrue($this->pass->setPass('kdfjdkjfdkfjdfHO')->topLowerCaseExists());
    }

    public function testArabicNumericCheck()
    {
        $this->assertTrue($this->pass->setPass('123456')->arabicNumericCheck());
        $this->assertFalse($this->pass->setPass('I1212')->arabicNumericCheck());
    }

    public function testMaxLimitSymbols()
    {
        $this->assertTrue($this->pass->setPass('kloremipsumdolorsitametconsectetueradipiscingelit
sddiamnonummynibheuismodtinciduntutlaoreetoloremagnaaliqfggfdfdfsdalhaafgrgrt')->maxLimitSymbols());
        $this->assertTrue($this->pass->setPass('kloremipsumdolorsicingelits')->maxLimitSymbols());
        $this->assertTrue($this->pass->setPass('kloremipsumdolorsicingelits2390230923')->maxLimitSymbols());
    }

    public function testMinLimitSymbols()
    {
        $this->assertFalse($this->pass->setPass('4589')->minLimitSymbols());
        $this->assertTrue($this->pass->setPass('5540454505kfjfkj')->minLimitSymbols());
        $this->assertTrue($this->pass->setPass('kfjfkj3454948594')->minLimitSymbols());
    }

    public function testLatinSymbolsCheck()
    {
        $this->assertFalse($this->pass->setPass('адловдалва')->latinSymbolsCheck());
        $this->assertTrue($this->pass->setPass('fkgjfgkjfgkjfgkfjg')->latinSymbolsCheck());
        $this->assertTrue($this->pass->setPass('LFKFLKGFLKGFGLSDMDKLMAKML')->latinSymbolsCheck());
    }

    public function testSpaceCheck()
    {
        $this->assertFalse($this->pass->setPass('FJGKFKGJFK GJ475475645')->spaceCheck());
        $this->assertTrue($this->pass->setPass('FJGKFKGJFKGJ475475645')->spaceCheck());
        $this->assertTrue($this->pass->setPass('dhgjdfhdjhsfhjdfhjdfhjdfhj475475645')->spaceCheck());
    }

    public function testCyrillicSymbolsCheck()
    {
        $this->assertFalse($this->pass->setPass('ldfkdlfkукдлукдлукдулкдулкдулкдулку')->cyrillicSymbolsCheck());
        $this->assertTrue($this->pass->setPass('укдлукдлукдулкдулкдулкдулку')->cyrillicSymbolsCheck());
        $this->assertTrue($this->pass->setPass('АПДЛПЛДАПЛДАПЛДПАЛДАПЛДАПЛДП')->cyrillicSymbolsCheck());
    }

    public function testMinNumberCount()
    {
        $this->assertFalse($this->pass->setPass('fdjfhdjfhdfjdhfjAHS')->minNumberCount());
        $this->assertTrue($this->pass->setPass('1')->minNumberCount());
        $this->assertTrue($this->pass->setPass('1457485')->minNumberCount());
        $this->assertTrue($this->pass->setPass('fgkfjgkfjg1457485')->minNumberCount());
        $this->assertTrue($this->pass->setPass('12fgkfjgkfjg')->minNumberCount());
    }
}
