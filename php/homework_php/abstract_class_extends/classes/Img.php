<?php


class Img extends SingleTag
{

protected string $src;

    /**
     * @param string $src
     * @return Img
     */
    public function setSrc(string $src): static
    {
        $this->src = $src;
        return $this;
    }


    public function html(): string
    {
        return "<img src='$this->src' style='$this->style' class='$this->class'>";
    }

}