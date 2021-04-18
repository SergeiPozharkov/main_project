<?php


class Br
{
    protected string $text;
    protected string $tagName = "";

    /**
     * @param string $text
     * @return Br
     */
    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param string $tagName
     * @return Br
     */
    public function setTagName(string $tagName): static
    {
        $this->tagName = $tagName;
        return $this;
    }

    public function html()
    {
        return "$this->text<$this->tagName>$this->text<$this->tagName>";
    }




}