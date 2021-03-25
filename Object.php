<?php

require_once('Class/Main.php');

$main = new Main();
$main->main();
$main->constant();

var_dump(Main::HARI);
