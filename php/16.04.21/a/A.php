<?php


class A
{
    protected string $href;
    protected string $innerText;

    /**
     * @param string $href
     */
    public function setHref(string $href): static
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param string $innerText
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html(): string
    {
        return "<a href='$this->href'>$this->innerText</a>";
    }
}