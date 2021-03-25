<?php

// kita dapat membuat method / property static dengan menggunakan keyword static
// static method/property tidak berpaengaruh dengan instansiasi object

// untuk mengakses nya bisa menggunakan cara : nama_class::nama_static
// tidak perlu menggunakan keyword new karena tidak diinstansiasi

// Static keyoword biasa diganakan untuk helper

class KeyStatic
{
    static public $nama = "Static Keyword";

    static public function sum(int ...$nilai): string
    {
        $jumlah = 0;

        foreach ($nilai as $n) {
            $jumlah += $n;
        }

        return $jumlah . PHP_EOL;
    }
}

// property/method yang static juga bisa diubah jika memiliki akses modifier public
$name = KeyStatic::$nama = "Hanif";
echo $name . PHP_EOL;

$sum = KeyStatic::sum(10, 10, 10, 10);
echo $sum;
