<?php


namespace App;


class CalcForStrings
{
    protected mixed $str;

    /**
     * @param mixed $str
     * @return CalcForStrings
     */
    public function setStr(mixed $str): static
    {
        $this->str = $str;
        return $this;
    }

    use StrlenTrait;
    use NumericCountTrait;
    use SymbolsCountTrait;
    use UpperCaseCountTrait;
    use LowerCaseCountTrait;
}