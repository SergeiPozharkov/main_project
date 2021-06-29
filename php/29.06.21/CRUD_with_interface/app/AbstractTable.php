<?php


namespace app;


abstract class AbstractTable
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

    abstract protected function reade(): array;

    abstract protected function save(array $table): void;
}