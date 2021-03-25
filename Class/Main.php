<?php

// variabel dalam class disebut property
// fungsi didalam class disebut method

// keyword this digunakan untuk mengambil method / property yang ada didalam class yang sama

// php juga memliki const, penulisannya dengan memanggil keyword const
// const bisa dipanggil dengan cara self::nama_const atau nama_class::nama_const

class Main
{
    const HARI = "Kamis";

    public $name = "PHP";

    public function main(): void
    {
        echo "Pengenalan Class {$this->name}" . PHP_EOL;
    }

    public function constant()
    {
        echo "Hari ini hari " . self::HARI . PHP_EOL;
    }
}
