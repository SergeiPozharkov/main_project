<?php


class TableWalk extends TableMap
{
    protected array $data2;

    /**
     * @param array $data2
     * @return TableWalk
     */
    public function setData2(array $data2): static
    {
        $this->data2 = $data2;
        return $this;
    }

    public function arrayWalk(): void
    {
        echo "<table border='1'><tr>";
        function trTd($arr)
        {
            echo "<td>$arr</td>";
        }

        array_walk($this->data2, 'trTd');
        echo "</tr></table>";
    }
}