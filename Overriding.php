<?php

// child class dapat menimpa / mengoverride method atau property yang ada didalam parent classnya
// argumen yang ada di method class parent tidak disarankann untuk diubah, tetapi boleh (Warning). Kecuali method __construct

// parent keyword dapat digunakan ketika ingin mengambil data parent yang telah ditimpa di childnya

require_once('Class/Visibility.php');

$obj1 = new Visibility("Ihsan", "20");
$obj1->sayHello();

$obj2 = new Turunan("Faiz", "20", "Oke");
$obj2->sayHello();
$obj2->parentSayHello();
