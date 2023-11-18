<?php

require_once "vendor/autoload.php";

$hello = new Infinity\App\Hello();
echo $hello->hello();

echo "\n";
$hiBuddy = new Infinity\App\Hello('James Bond');
echo $hiBuddy->hello();