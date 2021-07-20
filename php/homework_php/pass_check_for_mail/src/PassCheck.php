<?php


namespace App;


class PassCheck
{
    protected string $pass = '';

    /**
     * @param string $pass
     * @return $this
     */
    public function setPass(string $pass): static
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     *Проверяет на наличие простых комбинаций пароля
     * @return bool
     */
    public function keyboardSequence(): bool
    {
        $arr = ['love', 'family', 'home', 'password', 'qwerty', 'zxcvb', '1234567'];

        for ($i = 0; $i < count($arr); $i++) {
            if ($this->pass == $arr[$i]) {
//                echo "found!";
                return false;
            }
        }
        return true;
    }

    /**
     * Ищет в пароле определенные символы и заменяет их на соответствующие
     * @return bool
     */
    public function searchAndReplaceCharacter(): bool
    {
        if (preg_match_all("/[etao]/", $this->pass)) {
            preg_replace(["/e/", "/t/", "/a/", "/o/"], ["3", "?", "@", "0"], $this->pass);
            return true;
        }
        return false;
    }

    /**
     * Проверяет на наличие цифр в пароле
     * @return bool
     */
    public function numbersCheck(): bool
    {
        if (preg_match_all("/[\d]/", $this->pass)) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет наличие латинских букв в строке
     * @return bool
     */
    public function characterCheck(): bool
    {
        if (preg_match_all("/[a-z]/i", $this->pass)) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет наличие специальных символов
     * @return bool
     */
    public function otherSymbols(): bool
    {
        if (preg_match_all("/[!@#$%^&*()-_+=;:,./?\\\|`~\[\]{}\\\^'\"<>~\\\.\\\]/", $this->pass)) {
            return true;
        }
        return false;
    }
}