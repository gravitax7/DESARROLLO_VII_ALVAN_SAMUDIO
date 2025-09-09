<?php 
include "funciones_gimnasio.php"
$membresias = [
    "basica" =>80,
    "premium" => 120,
    "vip" => 180,
    "familiar" => 250,
    "corporativa" => 300
];

$miembros = [
   'Juan Pérez' =>['tipo' =>'premium','antiguedad'=>15],
   'Ana Garcia' => ['tipo' => 'basica','antiguedad'=>2],
   'Carlos López' => ['tipo'=> 'vip','antiguedad' => 30],
   'María Rodríguez' => ['tipo'=> 'familiar','antiguedad' => 8],
   'Luis Martínez' => ['tipo'=>'corporativa','antiguedad'=> 18]
];
?>