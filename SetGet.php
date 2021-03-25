<?php

// Setter dan getter berguna untuk memanipulasi property atau method yang bersifat protected atau private

require_once('Class/Visibility.php');

$obj = new Turunan("Hanif", "19", "Oke");
$obj->setUmur(20);
echo $obj->getUmur();
