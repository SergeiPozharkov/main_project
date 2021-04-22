<?php


class Button extends PairedTag
{
    protected string $value;
    protected string $name;
    protected string $type;
    protected string $text;

    /**
     * @param string $value
     * @return Button
     */
    public function setValue(string $value): static
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param string $name
     * @return Button
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $type
     * @return Button
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $text
     * @return Button
     */
    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function html()
    {
        return "<$this->tagName value='$this->value' name='$this->name' type='$this->type' style='$this->style'
        class='$this->class'>$this->text</$this->tagName>";
    }

}