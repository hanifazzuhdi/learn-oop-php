<?php

class Visibility
{
    public $nama    = "Hanif";
    protected $umur = "19 tahun";
    private $alamat = "Sidoarjo";

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function sayHello(): void
    {
        echo "Hello nama saya {$this->nama}. ini dari class " . __CLASS__ . PHP_EOL;
    }
}

class Turunan extends Visibility
{
    public $oke;

    public function __construct($nama, $umur, $oke)
    {
        parent::__construct($nama, $umur);

        echo "Ini class Turunan {$oke}" . PHP_EOL;
    }

    public function sayHello(): void
    {
        echo "Hello nama saya {$this->nama}. ini dari class " . __CLASS__ . PHP_EOL;
    }

    public function parentSayHello()
    {
        parent::sayHello();
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        return $this->umur = $umur;
    }
}
