<?php

// Inheritance atau pewarisan bisa dilakukan di php dengan menambahkan keyword extends pada class
// child class yang mewarisi parent class nya bisa menggunakan seluruh method dan property yang ada didalam parentnya

require_once('Class/Vehicle.php');

$mobil = new Mobil();
$mobil->roda = 4;
$mobil->bunyi = "Ngenng Ngenng";

var_dump($mobil);

$motor = new Motor();
$motor->roda = 2;
$motor->bunyi = "Wuihh Wuihh";

var_dump($motor);
