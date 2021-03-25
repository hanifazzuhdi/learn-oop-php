<?php

abstract class Abstrak
{
    abstract public function main($nama): void;
}

class Turunan extends Abstrak
{
    public function main($nama): void
    {
        echo "Nama saya : {$nama}" . PHP_EOL;
    }
}
