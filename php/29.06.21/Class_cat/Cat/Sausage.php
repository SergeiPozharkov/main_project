<?php

namespace Cat;


class Sausage implements IGost
{
    public function testy(): bool
    {
        return true;
    }

    public function calories(): float
    {
        return 70;
    }
}