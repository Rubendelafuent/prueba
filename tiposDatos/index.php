<?php

$name = "Rubén";
$edad = 20;
$direccion = array("Santiago", "Conxo");
$vacio = null;

echo "<hr>";

var_dump($name);
var_dump($edad);
var_dump($vacio);

echo "<hr/>";

var_dump($direccion);

echo "<pre>";
print_r($direccion);
echo "</pre>";


echo "<pre>";
print_r($_SERVER);
echo "</pre>";


echo $_SERVER['DOCUMENT_ROOT'];