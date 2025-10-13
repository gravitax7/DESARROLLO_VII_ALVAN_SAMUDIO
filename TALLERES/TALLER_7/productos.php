<?php
include 'config_session.php';
var_dump($_SESSION);
$productos = [
    1 => ['nombre' => 'Camiseta', 'precio' => 15.00],
    2 => ['nombre' => 'Jeans', 'precio' => 40.00],
    3 => ['nombre' => 'Zapatillas', 'precio' => 60.00],
    4 => ['nombre' => 'Gorra', 'precio' => 10.00],
    5 => ['nombre' => 'Mochila', 'precio' => 35.00],
];

$csrf_token = $_SESSION['csrf_token'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <p><a href="ver_carrito.php">Ver carrito</a></p>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr><th>Producto</th><th>Precio (USD)</th><th>Cantidad</th><th>Acción</th></tr>
        </thead>
        <tbody>
        <?php foreach ($productos as $id => $p): ?>
            <tr>
                <td><?php echo htmlspecialchars($p['nombre']); ?></td>
                <td><?php echo number_format($p['precio'], 2); ?></td>
                <td>
                    <form method="post" action="agregar_carrito.php" style="display:inline;">
                        <input type="hidden" name="producto_id" value="<?php echo (int)$id; ?>">
                        <input type="number" name="cantidad" value="1" min="1" style="width:60px;">
                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                        <input type="submit" value="Añadir al carrito">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
