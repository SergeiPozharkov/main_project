<?php

namespace Cat;


class Milk implements IGost
{
    public function testy(): bool
    {
        return true;
    }

    public function calories(): float
    {
        return 42.3;
    }
}