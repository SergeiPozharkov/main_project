<?php


class Textarea
{
    protected int $rows;
    protected int $cols;
    protected string $name;
    protected string $tagName = "";

    /**
     * @param int $rows
     * @return Textarea
     */
    public function setRows(int $rows): static
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @param int $cols
     * @return Textarea
     */
    public function setCols(int $cols): static
    {
        $this->cols = $cols;
        return $this;

    }

    /**
     * @param string $name
     * @return Textarea
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $tagName
     * @return Textarea
     */
    public function setTagName(string $tagName): static
    {
        $this->tagName = $tagName;
        return $this;
    }

    public function html()
    {
        return "<$this->tagName rows='$this->rows' cols='$this->cols' name='$this->name'></$this->tagName>";
    }
}