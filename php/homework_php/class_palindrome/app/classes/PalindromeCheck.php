<?php


namespace classes;


class PalindromeCheck
{
    protected Palindrome $palindrome;

    public function __construct(Palindrome $palindrome)
    {
        $this->palindrome = $palindrome;
    }


    /**
     * Определяет, является ли слово или предложение палиндромом
     * @return string
     */
    public function palindromeCheck(): string
    {
        $arr = $this->palindrome->reversString();
        return $arr['str'] === $arr['str_rev'] ? '<h1>This is palindrome</h1>' : '<h1>This is not palindrome</h1>';
    }

}