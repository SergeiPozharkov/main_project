<?php


namespace app;


class DB
{
    protected ICRUD $driver;

    public function __construct(ICRUD $driver)
    {
        $this->driver = $driver;
    }

    public function select(): array
    {
        return $this->driver->reade();
    }

    public function update(int $id, $row): ICRUD
    {
        return $this->driver->update($id, $row);
    }

    public function insert(array $row): ICRUD
    {
        return $this->driver->create($row);
    }

    public function delete(int $id)
    {
        return $this->driver->delete($id);
    }
}