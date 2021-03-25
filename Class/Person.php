<?php

class Person
{
    public $nama;

    public function __construct($name)
    {
        $this->name = $name;

        echo "Halo nama saya {$this->name}" . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Author : {$this->name}" . PHP_EOL;
    }
}
