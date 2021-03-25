<?php

// mirip dengan anonymous function
// cocok digunakan untuk program yang sederhana saja

// Implementasi 

interface Main
{
    public function getMain(?string $main): string;
}

$class = new class("Ayam") implements Main
{
    public $main;

    public function __construct($name)
    {
        $this->main = $name;
    }

    public function getMain($main = null): string
    {
        return $this->main . PHP_EOL;
    }

    public function setMain(string $main): string
    {
        return $this->main = $main;
    }
};

echo $class->getMain();
$class->setMain('Kambing');
echo $class->getMain();
