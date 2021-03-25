<?php

// ada 2 keyword final
// 1. digunakan pada class, jika digunakan akan membuat class tidak dapat diwariskan lagi
// 2. digunakan pada function / method, jika digunakan akan membuat method tidak akan bisa dioverride

// Implementasi :

class KeyFinal
{
    public function __construct()
    {
        echo "Ini Belum FINAL !";
    }

    public function sayHello(): void
    {
        echo "Hello nama saya Hanif" . PHP_EOL;
    }

    // final pada method
    final public function info(): void
    {
        echo "Ini method sudah FINAL !";
    }
}

final class Turunan extends KeyFinal
{
    // akan menimbulkan error karena sudah final
    public function info(): void
    {
        echo "Error Gaess";
    }
}

// Error karena class turunan sudah final
class AnakDua extends Turunan
{
    public function __construct()
    {
        echo "Ini juga bakalan Error";
    }
}

$obj = new AnakDua();
$obj2 = new Turunan();
$obj2->info();
$obj2->sayHello();
