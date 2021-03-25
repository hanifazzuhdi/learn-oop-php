<?php

interface Roda
{
    public function roda();
}

interface Mobil extends Roda
{
    public function merek(string $merek): void;
    public function warna(string $warna): void;
}

class Avanza implements Mobil
{
    public function roda()
    {
        echo "Roda nya ada 4";
    }

    public function merek($merek): void
    {
        echo "Merek mobil ini : $merek" . PHP_EOL;
    }

    public function warna($warna): void
    {
        echo "Warna mobil ini : $warna" . PHP_EOL;
    }
}
