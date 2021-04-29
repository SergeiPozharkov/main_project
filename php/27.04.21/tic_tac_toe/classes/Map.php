<?php


class Map extends Tictac
{
    /**
     * @param array $map
     * @return Map
     */
    public function setMap(array $map): static
    {
        $this->map = $map;
        return $this;
    }

    public function getHtmlTable(): string
    {
        $table = "<table border='1' class='table table-bordered border-dark'><th style='width: 50px;height: 50px; text-align: center'>0</th><th 
        style='width: 50px;height: 50px; text-align: center'>1</th><th style='width: 50px; height: 50px;
        text-align: center'>2</th></table>";
        for ($i = 0; $i < count($this->map); $i++) {
            $table .= "<table border='1' class='table table-bordered border-dark'><tr>";
            for ($j = 0; $j < count($this->map); $j++) {
                if ($this->map[$i][$j] == "") {
                    $table .= "<td style='width: 50px;height: 50px'></td>";
                }
//                if ($j % 3 == 0) {
//                    $html .= "<th></th>";
//                }
                if ($this->map[$i][$j] == "X") {
                    $table .= "<td style='width: 50px;height: 50px; text-align: center'>X</td>";
                } elseif ($this->map[$i][$j] == "O") {
                    $table .= "<td style='width: 50px;height: 50px; text-align: center'>O</td>";
                }
            }
            $table .= "</tr></table>";
        }
        return $table;
    }
}