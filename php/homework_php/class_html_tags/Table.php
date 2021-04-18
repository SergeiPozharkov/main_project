<?php


class Table
{
    protected string $tagName = "";
    protected array $data;
    protected int $border;
    protected string $tr;
    protected string $td;

    /**
     * @param string $tagName
     * @return Table
     */
    public function setTagName(string $tagName): static
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @param array $data
     * @return Table
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param int $border
     * @return Table
     */
    public function setBorder(int $border): static
    {
        $this->border = $border;
        return $this;
    }

    /**
     * @param string $tr
     * @return Table
     */
    public function setTr(string $tr): static
    {
        $this->tr = $tr;
        return $this;
    }

    /**
     * @param string $td
     * @return Table
     */
    public function setTd(string $td): static
    {
        $this->td = $td;
        return $this;
    }

    public function html()
    {
        $html = "<$this->tagName border='$this->border'>";
        $html .= "<$this->tr>";
        foreach ($this->data as $row) {
            $html .= "<$this->td>$row</$this->td>";
        }
        $html .= "</$this->tr>";
        $html .= "</$this->tagName>";
        return "$html";
    }

}