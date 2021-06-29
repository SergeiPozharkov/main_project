<?php


namespace app;


class PhpTable extends AbstractTable implements ICRUD
{

    /**
     * Возвращает всю таблицу
     * @return array
     */
    public function reade(): array
    {
        if (file_exists($this->fileName)) {
            return require $this->fileName;
        } else {
            return [];
        }
    }


    protected function save(array $table): void
    {
        file_put_contents($this->fileName, "<?php return " . var_export($table, true) . ";");
    }
}