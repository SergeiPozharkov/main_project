<?php

class HtmlList
{
    protected array $arr;
    protected string $num;

    /**
     * @param string $num
     * @return HtmlList
     */
    public function setNum(string $num): static
    {
        $this->num = $num;
        return $this;
    }

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function html(): string
    {
        $html = "<ul>";
        foreach ($this->arr as $value) {
            $html .= "<li type='$this->num'>$value</li>";
        }
        $html .= "</ul>";
        return $html;
    }

}