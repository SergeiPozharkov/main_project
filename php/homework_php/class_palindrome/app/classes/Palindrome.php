<?php


namespace classes;

/**
 * Class Palindrome
 * @package classes
 */
class Palindrome
{
    /**
     * @var string
     */
    protected string $str = '';

    /**
     * Palindrome constructor.
     */
    public function __construct(string $str = '')
    {
        $this->setStr($str);
    }

    /**
     * @param string $str
     * @return Palindrome
     */
    public function setStr(string $str): static
    {
        $this->str = $str;
        return $this;
    }

    /**
     *Переворачивает отформатированную строку
     * @return array
     */
    public function reversString(): array
    {
        $reversString = '';
        $string = preg_replace(
            "/[,.!?-_:;]+/u",
            '',
            mb_strtolower(str_replace(' ', '', $this->str))
        );

        for ($i = mb_strlen($string); $i >= 0; $i--) {
            $reversString .= mb_substr($string, $i, 1);
        }
        return ['str' => $string, 'str_rev' => $reversString];
    }

}