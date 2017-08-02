<?php

require_once "vendor/autoload.php";

$hello = new AdobeSun\Demo\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new AdobeSun\Demo\Hello('My Goddess');
echo $hiGirl->hello();
