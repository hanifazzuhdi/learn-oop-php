<?php

// trait mirip dengan extension atau ultilities
// kita bisa menggunakan trait pada class dengan memnaggilnya menggunkan use

// method / property yang ada pada trait yang di use diclass dapat digunakan sebagaimana halnya method / properti class

trait Hello
{
    public $name = "__KOSONG__";

    public function sayHello(?string $nama = null)
    {
        if (is_null($nama)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $nama" . PHP_EOL;
        }
    }
}

class Sapa
{
    use Hello;

    public function __construct()
    {
        echo "Percobaan Trait" . PHP_EOL;
    }
}

$obj = new Sapa();
$obj->sayHello("Hanif");
// echo $obj->name;
