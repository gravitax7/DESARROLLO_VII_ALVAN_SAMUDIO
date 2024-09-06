<?php
include 'utilidades_texto.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integración de PHP con HTML</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        .destacado { color: blue; font-weight: bold; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Integración de PHP con HTML</h1>
    <?php
    $arreglo_frases=["Hola Mundo", "En este texto debo contar la cantidad de vocales", "Parcial numero 1 de Php"];
    for ($i=0;$i<count($arreglo_frases);$i++){
        $longitud_texto= contar_palabras($arreglo_frases[$i]);
        $real_count=$i+1;
        echo "El número total de palabras en la frase $real_count es de: $longitud_texto.";
        $total_vocales= contar_vocales($arreglo_frases[$i]);
        echo "   El total de vocales dentro de la frase $real_count es de: $total_vocales.</br>";
    }
    ?>