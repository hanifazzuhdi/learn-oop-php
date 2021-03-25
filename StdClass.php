<?php

// stdClass berfungsi untuk mengunah array ke object atau sebaliknya

require_once('Class/Vehicle.php');

$obj = new Vehicle();

// Ubah Object ke Array
$arr = (array) $obj;
var_dump($arr);
