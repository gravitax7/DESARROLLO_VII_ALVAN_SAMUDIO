<?php
#1. CONTADOR DE CARACTERES
$texto = "Hola Mundo";
function contar_palabras($texto){
    #$Cantidad_letras= strlen($texto);
    $array_texto= explode(" ",$texto);
    $Cantidad_palabras= count($array_texto);
    return $Cantidad_palabras;
}

$longitud_texto = contar_palabras($texto);
//echo "El número total de palabras es de: $longitud_texto.</br>";

#2. CONTADOR DE VOCALES
$texto_vocales= "En este texto debo contar la cantidad de vocales";

function contar_vocales($texto_vocales){
    $contador = 0 ;
    $vocales = ["a","e","i","o","u"];
    $texto_recibido =strtolower($texto_vocales);
    for ($i=0; $i <strlen($texto_recibido);$i++){
        if (in_array($texto_recibido[$i],$vocales)){
            $contador++;
        }
    }
    return $contador;
    }
$total_vocales= contar_vocales($texto_vocales);
//echo "El total de vocales dentro de la frase es de: $total_vocales.\n";



?>