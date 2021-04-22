<?php


abstract class PairedTag
{
    protected string $style;
    protected string $class;
    protected string $tagName;

    /**
     * @param string $style
     * @return PairedTag
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @param string $class
     * @return PairedTag
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @param string $tagName
     * @return PairedTag
     */
    public function setTagName(string $tagName): static
    {
        $this->tagName = $tagName;
        return $this;
    }

    abstract public function html();

}