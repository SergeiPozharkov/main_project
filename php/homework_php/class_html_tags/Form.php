<?php

class Form
{
    protected string $form;
    protected string $action;
    protected string $method;
    protected string $textarea;
    protected int $rows;
    protected int $cols;
    protected string $name;
    protected string $input;
    protected string $type;
    protected string $value;

    /**
     * @param string $form
     * @return Form
     */
    public function setForm(string $form): static
    {
        $this->form = $form;
        return $this;
    }

    /**
     * @param string $action
     * @return Form
     */
    public function setAction(string $action): static
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @param string $method
     * @return Form
     */
    public function setMethod(string $method): static
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param string $textarea
     * @return Form
     */
    public function setTextarea(string $textarea): static
    {
        $this->textarea = $textarea;
        return $this;
    }

    /**
     * @param int $rows
     * @return Form
     */
    public function setRows(int $rows): static
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @param int $cols
     * @return Form
     */
    public function setCols(int $cols): static
    {
        $this->cols = $cols;
        return $this;
    }

    /**
     * @param string $name
     * @return Form
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $input
     * @return Form
     */
    public function setInput(string $input): static
    {
        $this->input = $input;
        return $this;
    }

    /**
     * @param string $type
     * @return Form
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $value
     * @return Form
     */
    public function setValue(string $value): static
    {
        $this->value = $value;
        return $this;
    }

    public function html()
    {
        return "<$this->form action='$this->action' method='$this->method'><$this->textarea rows='$this->rows' 
        cols='$this->cols' name='$this->name'></$this->textarea><br><br><$this->input type='$this->type' value='$this->value'>
        </$this->form>";
    }
}