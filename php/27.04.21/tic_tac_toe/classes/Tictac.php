<?php


class Tictac
{
    protected array $map;

    public function __construct($size)
    {
        $this->init($size);
    }

    /**
     * @return array
     */
    public function getMap(): array
    {
        return $this->map;
    }

    public function init(int $size): static
    {
        $this->map = [];
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $this->map[$i][$j] = "";
            }
        }
        return $this;
    }

    public function putCross(int $i, int $j): static
    {
//        && isset($this->map[$i][$j]) && $this->map[$i][$j] == null
        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "") {
            $this->map[$i][$j] = "X";
        }
        return $this;
    }

    public function putZero(int $i, int $j): static
    {
//        && isset($this->map[$i][$j]) && $this->map[$i][$j] == null
        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "") {
            $this->map[$i][$j] = "O";
        }
        return $this;
    }

    public function checkWinnerByRow($map): bool
    {
        foreach ($map as $row) {
            if ($row[0] !== "") {
                $winner = true;
                for ($j = 1; $j < count($row); $j++) {
                    if ($row[$j] !== $row[$j - 1]) {
                        $winner = false;
                    }
                }
                if ($winner) {
                    return true;
                }
            }
        }
        return false;
    }

    public function checkWinnerByCol(): bool
    {
        $map = array_map(null, ...$this->map);
        return $this->checkWinnerByRow($map);
    }

    public function checkWinner()
    {
        return $this->checkWinnerByRow($this->map) or $this->checkWinnerByCol();
    }

    /**
     * @param array $map
     * @return Tictac
     */
    public function setMap(array $map): static
    {
        $this->map = $map;
        return $this;
    }

}