<?php


namespace App;


class PassValidation
{
    protected string $pass = '';

    /**
     * @param string $pass
     * @return PassValidation
     */
    public function setPass(string $pass): static
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * Проверяет на минимальную длину пароля
     * @return bool
     */
    public function minLimitSymbols(): bool
    {
        if (strlen($this->pass) >= 8) {
            return true;
        }
        echo "Пароль должен быть не менее 8 символов";
        return false;
    }

    /**
     * Проверяет на максимальную длину пароля
     * @return bool
     */
    public function maxLimitSymbols(): bool
    {
        if (strlen($this->pass) > 128) {
            return false;
//            echo "Пароль должен быть не более 128 символов";
        } else {
            return true;
        }
    }

    /**
     * Проверяет наличие хотя бы одной строчной и заглавной буквы
     * @return bool
     */
    public function topLowerCaseExists(): bool
    {
        if (preg_match_all("/[A-Z]/", $this->pass) >= 1 && preg_match_all("/[a-z]/", $this->pass) >= 1) {
            return true;
        }
        echo "Пароль должен содержать минимум по одной строчной и заглавной букве";
        return false;
    }

    /**
     * Проверяет состоит ли пароль полностью из кириллических символов
     * @return bool
     */
    public function cyrillicSymbolsCheck(): bool
    {
        if (preg_match_all("/[а-я]/ui", $this->pass) != mb_strlen($this->pass)) {
            echo "Пароль не полностью состоит из кириллических символов";
            return false;
        }
        return true;
    }


    /**
     * Проверяет состоит ли пароль полностью из латинских символов
     * @return bool
     */
    public function latinSymbolsCheck(): bool
    {
        if (preg_match_all("/[a-z]/i", $this->pass) == strlen($this->pass)) {
            return true;
        }
        echo "Пароль не полностью состоит из латинских символов";
        return false;
    }

    /**
     * Проверяет присутствуют ли в пароле цифры
     * @return bool
     */
    public function minNumberCount(): bool
    {
        if (preg_match_all("/[\d]/", $this->pass) >= 1) {
            return true;
        }
        echo "В пароле должна присутствовать как минимум одна цифра";
        return false;
    }

    /**
     * Проверяет состоит ли пароль из арабских цифр
     * @return bool
     */
    public function arabicNumericCheck(): bool
    {
        if (preg_match_all("/[\d]/", $this->pass) == strlen($this->pass)) {
            return true;
        }
        echo "Пароль должен состоять из арабских цифр";
        return false;
    }

    /**
     * Проверяет присутствуют ли в пароле пробелы
     * @return bool
     */
    public function spaceCheck(): bool
    {
        if (preg_match_all("/[\s]/", $this->pass)) {
            echo "Пароль не должен содержать пробелы";
            return false;
        }
        return true;
    }

    /**
     *Проверяет присутствуют ли в пароле недопустимые символы
     * @return bool
     */
    public function otherSymbolsCheck(): bool
    {
        if (!preg_match_all("/[:~!?@#$%^&*_+(){}><.,;]/u", $this->pass)) {
            return true;
        }
        echo "Пароль не должен содержать недопустимые символы";
        return false;
    }
}