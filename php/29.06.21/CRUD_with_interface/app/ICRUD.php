<?php


namespace app;


interface ICRUD
{
    /**
     * Добавляет строку данных в таблицу
     * @return $this
     */
    public function create(array $row): static;

    /**
     * Возвращает всю таблицу
     * @return array
     */
    public function reade(): array;

    /**
     * Изменяет строку в таблице
     * @return $this
     */
    public function update(int $id, array $row): static;

    /**
     * Удаляет строку из таблицы
     * @return $this
     */
    public function delete(int $id): static;
}