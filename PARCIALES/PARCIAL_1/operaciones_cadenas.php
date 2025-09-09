<?php
$text = "HOLA MUNDO HOLA MUNDO";

function contar_palabras_repetidas($texto) {
    $palabras = explode(" ", strtolower($texto));
    $count = [];
    foreach ($palabras as $palabra) {
        if (isset($count[$palabra])) {
            $count[$palabra]++;
        } else {
            $count[$palabra] = 1;
        }
        }
    return implode(" ",$count);
}

function capitalizar_palabras($texto){
    $palabras_array = explode(" ", strtolower(trim($texto)));
    $array_toupper = array_map(function($array){
        return strtoupper(substr($array,0,1)). substr($array,1);
    },$palabras_array);
    return implode (" ", $array_toupper);
}

//echo capitalizar_palabras($text);


?>
