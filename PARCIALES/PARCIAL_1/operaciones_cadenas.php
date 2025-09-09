<?php
$text = "HOLA MUNDO HOLA MUNDO";

function contar_palabbras_repetidas($texto){
    $palabras = explode(" ",strtolower($texto));
    //$result = [explode(" ",strtolower($texto)) => 1];
    $count = [];
    foreach($palabras as $matches){
     if (isset($count[$matches])){
        $count[$matches] += 1;
        }
    }
    return implode(" ", $count);
}

function capitalizar_palabras($texto){
    $palabras_array = explode(" ", strtolower(trim($texto)));
    $array_toupper = array_map(function($array){
        return strtoupper(substr($array,0,1)). substr($array,1);
    },$palabras_array);
    return implode (" ", $array_toupper);
}
echo contar_palabbras_repetidas($text);

echo capitalizar_palabras($text);


?>
