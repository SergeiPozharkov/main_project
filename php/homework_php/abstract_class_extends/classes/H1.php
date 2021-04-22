<?php


class H1 extends PairedTag
{
    protected string $text;

    /**
     * @param string $text
     * @return H1
     */
    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function html()
    {
        return "<$this->tagName style='$this->style' class='$this->class'>$this->text</$this->tagName>";
    }


}