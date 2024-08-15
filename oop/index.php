<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Release 0
$sheep = new Animal("shaun");
echo $sheep->get_info() . "<br>";

// Release 1
$kodok = new Frog("buduk");
echo $kodok->get_info() . "<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->get_info();
