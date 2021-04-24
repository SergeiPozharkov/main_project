<?php


class UlWalk extends UlMap
{
    protected array $data2;

    /**
     * @param array $data2
     * @return UlWalk
     */
    public function setData2(array $data2): static
    {
        $this->data2 = $data2;
        return $this;
    }

    public function arrayWalk(): void
    {
        echo "<ul>";
        function li2($arr)
        {
            echo "<li>$arr</li>";
        }

        array_walk($this->data2, 'li2');
        echo "</ul>";
    }
}