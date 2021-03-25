<?php

// class dan method dalam interface secara otomatis akan bersifat abstract
// interface tidak boleh diisi dengan property
// semua method dalam interface harus diimplemantasikan kedalam class yang mewarisinya
// untuk melakukan implementasi interface dapat menggunakan keyword implements

// interface dapat di wariskan menggunakan keyword extends

require_once('Class/Mobil.php');

$obj = new Avanza();
$obj->merek("Toyota");
