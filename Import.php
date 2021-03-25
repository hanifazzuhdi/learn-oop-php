<?php

// kita bisa menginport class dengan menggunakan keyword use

// kita juga bisa memberikan alias jika ada 2 class atau lebih yang memiliki nama yang sama yang ada didalam namespace

require_once('Class/Conflict.php');

use Class\Conflict1\Conflict as Conflict1;
use Class\Conflict2\Conflict;

$conflict1 = new Conflict1;
$conflict2 = new Conflict;
