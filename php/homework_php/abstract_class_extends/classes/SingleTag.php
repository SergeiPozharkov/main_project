<?php


abstract class SingleTag
{
    protected string $style;
    protected string $class;

    /**
     * @param string $style
     * @return SingleTag
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @param string $class
     * @return SingleTag
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }

    abstract public function html();
}