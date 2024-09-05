<?php
$calificacion = 71;

if ($calificacion <=59){
    $letra = "F";
    echo "Tu calificación es: $letra";
}elseif ($calificacion < 71 && $calificacion > 59) {
    $letra = "D";
    echo "Tu calificación es: $letra";
}elseif ($calificacion < 81 && $calificacion > 69) {
    $letra = "C";
    echo "Tu calificación es: $letra";
}elseif ($calificacion < 91 && $calificacion > 79) {
    $letra = "B";
    echo "Tu calificación es: $letra";
}elseif ($calificacion < 101 && $calificacion > 89) {
    $letra = "A";
    echo "Tu calificación es: $letra";
}else{
    echo "La nota ingresada está incorrecta, favor revisar.";
}
echo"<br>";
switch ($letra){
    case "A": echo "Excelente Trabajo!";
    break;
    case "B": echo "Buen Trabajo";
    break;
    case "C": echo "Trabajo Aceptable";
    break;
    case "D": echo "Necesitas Mejorar";
    break;
    case "F": echo "Debes Esforzarte más";
}
?>