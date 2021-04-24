<?php


class TableMap
{
    protected array $data1;

    /**
     * @param array $data1
     * @return TableMap
     */
    public function setData1(array $data1): static
    {
        $this->data1 = $data1;
        return $this;
    }

    public function arrayMap(): void
    {
        echo "<table border='1'><tr>";
        $fun = function ($arr) {
            echo "<td>$arr</td>";
        };
        array_map($fun, $this->data1);
        echo "</tr></table>";
    }
}