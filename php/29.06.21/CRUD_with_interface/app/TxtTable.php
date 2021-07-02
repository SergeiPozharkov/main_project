<?php


namespace app;


class TxtTable //extends AbstractTable implements ICRUD
{

    protected string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * Удаляет строку из таблицы
     * @return PhpTable
     */
    public function delete(int $id): static
    {
        $table = $this->reade();
        unset($table[$id]);
        $this->save($table);
        return $this;
    }

    /**
     * Добавляет строку данных в таблицу
     * @return PhpTable
     */
    public function create(array $row): static
    {
        $table = $this->reade();
        $table[] = $row;
        $this->save($table);
        return $this;
    }

    /**
     * Изменяет строку в таблице
     * @return PhpTable
     */
    public function update(int $id, array $row): static
    {
        $table = $this->reade();
        $table[$id] = $row;
        $this->save($table);
        return $this;
    }

    /**
     * Возвращает всю таблицу
     * @return array
     */
    public function reade(): array
    {
        if (file_exists($this->fileName)) {
            return explode(';', file_get_contents($this->fileName));
        } else {
            return [];
        }
    }

    protected function save(array $table): void
    {
        file_put_contents($this->fileName, $this->toStr($table));
    }

    public function toStr(array $table): string
    {
        return str_replace(',', ';', implode(',', $table));
    }
}

$txt = new TxtTable('../table.txt');

echo $txt->toStr([0 => 0,
    1 => "Name:Иванов",
    2 => "ZP:150"
]);