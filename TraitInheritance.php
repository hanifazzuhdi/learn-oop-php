<?php

// trait bisa di wariskan dengan menambahkan use pada trait yang ingin mewarisi

trait satu
{
    public $satu = "Satu";
}

trait dua
{
    use satu;
    public $dua = "dua";
}

trait all
{
    use satu, dua;
}

class TraitInheritance
{
    use all;

    public function __construct()
    {
        echo $this->satu . ' ' . $this->dua . PHP_EOL;
    }
}

$obj = new TraitInheritance();
