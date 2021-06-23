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
    public function __construct()
    {
        $this->setStr($this->str);
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
     *Работает со всеми текстами (utf-8)
     * @return string
     */
    public function palindromeCheck(): string
    {
        $reversString = '';
        $string = preg_replace(
            "/[,.!?-_]+/u",
            '',
            mb_strtolower(str_replace(' ', '', $this->str))
        );

        for ($i = mb_strlen($string); $i >= 0; $i--) {
            $reversString .= mb_substr($string, $i, 1);
        }
        return $reversString === $string ? '<h1>This is palindrome</h1>' : '<h1>This is not palindrome</h1>';
    }

}