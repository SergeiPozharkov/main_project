<?php

class Mercedes extends Auto
{
    public function drive(): string
    {
        if ($this->bak > 0) {
            $this->consumption(15);
            return "Я езжу очень быстро";
        }
        return "Кончилось топливо";
    }
}