<?php


class OlWalk extends OlMap
{
    protected array $data2;

    /**
     * @param array $data2
     * @return OlWalk
     */
    public function setData2(array $data2): static
    {
        $this->data2 = $data2;
        return $this;
    }

    public function arrayWalk(): void
    {
        echo "<ol>";
        function li($arr)
        {
            echo "<li>$arr</li>";
        }
        array_walk($this->data2, 'li');
        echo "</ol>";
    }

}