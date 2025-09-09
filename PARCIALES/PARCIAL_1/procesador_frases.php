<?php
include "operaciones_cadenas.php";

$array_frases = ["Hola mundo Hola mundo ya viene navidad","Santa claus quiero quiero para esta navidad unos audifonos sony sony",
 "Tienes privilegios de administrador","Son necesarias si el bloque de código tiene más de una línea. Para una sola línea, son opcionales pero recomendadas para claridad."];


?>

<!DOCTYPE html>
<body>
    <table>
        <th>
            Frases
        </th>
        <th>
            Palabras Repetidas
        </th>
        <th>Capitalizar Palabras</th>
    <?php foreach ($array_frases as $frases): ?>
        <tr>
        <td> <?php echo $frases?></td>
        <td><?php echo contar_palabras_repetidas($frases);?></td>
        <td><?php echo capitalizar_palabras($frases); ?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>