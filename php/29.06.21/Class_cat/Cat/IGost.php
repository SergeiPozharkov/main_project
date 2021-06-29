<?php

namespace Cat;


interface IGost
{
    /**
     * Еда сделанная по госту - вкусная
     * @return bool
     */
    public function testy(): bool;

    /**
     * @return float
     */
    public function calories(): float;
}