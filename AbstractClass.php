<?php

// Abstract class adalah class abstract yang tidak dapat diinstansiasi, hanya dapat diturunkan saja
// adapun abstract function hanya tidak boleh mengandung isi, dan harus dibuat di class turunannya

// Method abstract tidak boleh private

require_once('Class/Abstrak.php');

$obj = new Turunan();
$obj->main('Hanif');
