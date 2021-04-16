<?php


class Ul
{
    protected array $data;
    protected string $type;

    /**
     * @param array $data
     * @return Ul
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $type
     * @return Ul
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        $html = "";
        foreach ($this->data as $value) {
            $html .= "\t<li>$value</li>\n";
        }
        return "<ul type='$this->type'>\n$html</ul>";
    }
}