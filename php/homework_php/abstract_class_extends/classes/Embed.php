<?php


class Embed extends SingleTag
{

    protected string $src;

    /**
     * @param string $src
     * @return Embed
     */
    public function setSrc(string $src): static
    {
        $this->src = $src;
        return $this;
    }

    public function html(): string
    {
        return "<embed src='$this->src' style='$this->style'>";
    }


}