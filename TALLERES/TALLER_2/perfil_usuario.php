<?php
$nombre_completo="Alvan Martin Samudio";
$edad= 26;
$correo ="alvan.samudio@utp.ac.pa";
$telefono="63846144";
define("OCUPACION", "Estudiante");
echo ("Hola, mi nombre es $nombre_completo, mi edad es: $edad, mi correo es: $correo, mi telefono es: $telefono<br><br>");
print"Tengo $edad años y me llamo $nombre_completo<br><br>";
printf("Me llamo %s y tengo %d años, mi correo es: %s, mi teléfono es: %s<br><br>", $nombre_completo,$edad,$correo,$telefono);
echo "<br>Información de debugging:<br>";
var_dump($nombre);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
?>