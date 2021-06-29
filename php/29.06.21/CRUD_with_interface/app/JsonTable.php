<?php


namespace app;


class JsonTable extends AbstractTable implements ICRUD
{

    /**
     * Возвращает всю таблицу
     * @return array
     */
    public function reade(): array
    {
        if (file_exists($this->fileName)) {
            return json_decode(file_get_contents($this->fileName), true);
        } else {
            return [];
        }
    }


    protected function save(array $table): void
    {
        json_decode(file_get_contents($this->fileName), true);
    }
}