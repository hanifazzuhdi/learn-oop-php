<?php

// Polymorpihsm adalah kemampuan sebuah object berubah bentuk dari satu bentuk ke bentuk yang lain
// Konsep ini erat kaitannya dengan pewarisan

// konsep polymorphism dapat dilakukan di property maupun arguments pada method/functiton

// Kita bisa melakukan type checks dengan menggunakan keyword instanceof

require_once('Class/Elektronik.php');

$obj = new Info();
$obj->elektronik = new Elektronik();
var_dump($obj);

$obj->elektronik = new Laptop();
var_dump($obj);

$obj->elektronik = new Hp();
var_dump($obj);


sayElektronik(new Elektronik("Elektronik"));
sayElektronik(new Laptop("Laptop"));
sayElektronik(new Hp("Hp"));
