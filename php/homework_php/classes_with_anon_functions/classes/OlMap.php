<?php


class OlMap
{
    protected array $data1;

    /**
     * @param array $data1
     * @return OlMap
     */
    public function setData1(array $data1): static
    {
        $this->data1 = $data1;
        return $this;
    }

    public function arrayMap(): void
    {
        echo "<ol>";
        $fun = function ($arr) {
            echo "<li>$arr</li>";
        };
        array_map($fun, $this->data1);
        echo "</ol>";
    }

}