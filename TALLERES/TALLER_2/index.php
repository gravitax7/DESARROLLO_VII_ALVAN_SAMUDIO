<?php
$nombre = "Juan";
$edad= 25;

$presentacion1 = "Hola, mi nombre es " . $nombre . " y tengo " . $edad . " años.";
$presentacion2= "Hola, mi nombre es $nombre y tengo $edad años";
define ("SALUDO", "¡Bienvenido!");
$mensaje= SALUDO . " " . $nombre;

echo $presentacion1 . "<br>";
echo $presentacion2 . "<br>";
echo $mensaje . "<br>";

?>