<?php


class Input extends SingleTag
{

    protected string $type;
    protected string $value;

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

    public function html()
    {
        if (!empty($this->value)) {
            $html = "<input type='$this->type' value='$this->value' class='$this->class' style='$this->style'>";
        } else {
            $html = "<input type='$this->type' class='$this->class' style='$this->style'>";
        }
        return "$html";
    }

}