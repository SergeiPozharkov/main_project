<?php

// Как работает свойство protected

class Test1
{
    protected $info;
}

class Test2 extends Test1
{
    public function Test()
    {
        $this->info = "text info";
        echo $this->info;
    }
}

$test = new Test2();
$test->Test();
//$test->info = "not info"; // Не работает т.к свойство protected
