<?php

// ada 3 visibility :

// 1. public    => method atau property public dapat diakses dimana saja
// 2. protected => method atau property protected hanya dapat diakses di class tersebut dan turunannya
// 3. private   => method atau property private hanya dapat diakses di class parentnya saja

require_once('Class/Visibility.php');

$obj = new Visibility();
echo $obj->nama;
// echo $obj->umur;
// echo $obj->alamat;
