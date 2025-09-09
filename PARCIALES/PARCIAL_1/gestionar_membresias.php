<?php 
include "funciones_gimnasio.php";
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


<!DOCTYPE html>
<body>
    <table>
        <th>Lista de miembros</th>
        <th>Cuota base</th>
        <th>Descuento</th>
        <th>Seguro medico</th>
        <th>Cuota final</th>
    <?php foreach ($miembros as $cliente => $memb_client): ?>
        <tr>
        <td> <?php echo $cliente ." - " . $memb_client['tipo']?></td>
        <td><?php echo $membresias[$memb_client['tipo']];?></td>
        <td><?php echo calcular_promocion($memb_client['antiguedad']); ?></td>
        <td><?php echo calcular_seguo_medico($membresias[$memb_client['tipo']]); ?></td>
        <td><?php echo calcular_cuota_final($membresias[$memb_client['tipo']], calcular_promocion($memb_client['antiguedad']), calcular_seguo_medico($membresias[$memb_client['tipo']])); ?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>