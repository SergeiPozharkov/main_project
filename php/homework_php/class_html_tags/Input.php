<?php


class Input
{
    protected string $type;
    protected string $value;
    protected string $tagName = "";

    /**
     * @param string $type
     * @return Input
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $value
     * @return Input
     */
    public function setValue(string $value): static
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param string $tagName
     * @return Input
     */
    public function setTagName(string $tagName): static
    {
        $this->tagName = $tagName;
        return $this;
    }

    public function html()
    {
        return "<$this->tagName type='$this->type' value='$this->value'>";
    }

}