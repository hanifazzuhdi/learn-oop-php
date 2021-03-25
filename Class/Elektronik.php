<?php

class Elektronik
{
    public ?string $nama;

    public function __construct($nama = null)
    {
        $this->nama = $nama;
        return "Ini class " . __CLASS__;
    }
}

class Laptop extends Elektronik
{
}

class Hp extends Elektronik
{
}

//  =====  //

class Info
{
    public Elektronik $elektronik;
}

function sayElektronik(Elektronik $elektronik)
{
    if ($elektronik instanceof Laptop) {
        echo "Hello Laptop, Ini dari class {$elektronik->nama}" . PHP_EOL;
    } else if ($elektronik instanceof Hp) {
        echo "Hello HP, Ini dari class {$elektronik->nama}" . PHP_EOL;
    } else if ($elektronik instanceof Elektronik) {
        echo "Hello Elektronik, Ini dari class {$elektronik->nama}" . PHP_EOL;
    }
}
