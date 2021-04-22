<?php


class A extends PairedTag
{
    protected string $href;
    protected string $name;
    protected string $text;

    /**
     * @param string $href
     * @return A
     */
    public function setHref(string $href): static
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param string $name
     * @return A
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $text
     * @return A
     */
    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function html()
    {
        return "<$this->tagName href='$this->href' name='$this->name' class='$this->class' style='$this->style'>
        $this->text</$this->tagName>";
    }

}