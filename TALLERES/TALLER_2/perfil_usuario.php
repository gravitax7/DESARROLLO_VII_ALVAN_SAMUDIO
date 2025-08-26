<?php
$nombre_completo = "Alvan Martin Samudio";
$edad = 27;
$correo = "alvan.samudio@utp.ac.pa";
$telefono = 63846144;

define("OCUPACION","Analista programador");

$mens1 = "Hola mi nombre es: ";
$mens2 = ", tengo ";
$mens3 = " años y mi ocupacion actual es: ";

$mfinal = $mens1 . $nombre_completo . $mens2 . $edad . $mens3 . OCUPACION;

print($mfinal . "<br>");
echo "<br>";
printf("En resumen, %s, %d años, ocupacion: %s <br>", $nombre_completo, $edad, OCUPACION);

echo "<br>Información de debugging:<br>";
var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(OCUPACION);
echo "<br>";

?>