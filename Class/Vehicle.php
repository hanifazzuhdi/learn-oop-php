<?php

class Vehicle
{
    public $roda;
    public $mesin = "Mesin";

    public function bunyi($bunyi)
    {
        return $bunyi;
    }
}

class Motor extends Vehicle
{
}

class Mobil extends Vehicle
{
}
