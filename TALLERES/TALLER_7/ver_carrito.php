<?php
// ver_carrito.php
require_once 'config_session.php';

// Lista de productos (para mostrar nombre y precio)
$productos = [
    1 => ['nombre' => 'Camiseta', 'precio' => 15.00],
    2 => ['nombre' => 'Jeans', 'precio' => 40.00],
    3 => ['nombre' => 'Zapatillas', 'precio' => 60.00],
    4 => ['nombre' => 'Gorra', 'precio' => 10.00],
    5 => ['nombre' => 'Mochila', 'precio' => 35.00],
];

// Verificar si hay carrito
if (empty($_SESSION['carrito'])) {
    echo "<p>Tu carrito está vacío.</p>";
    echo '<a href="productos.php">Volver a productos</a>';
    exit;
}

$total = 0;
?>

<h2>Tu carrito de compras</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Subtotal</th>
        <th>Acción</th>
    </tr>

    <?php foreach ($_SESSION['carrito'] as $id => $cantidad): 
        $nombre = htmlspecialchars($productos[$id]['nombre']);
        $precio = $productos[$id]['precio'];
        $subtotal = $precio * $cantidad;
        $total += $subtotal;
    ?>
        <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $cantidad; ?></td>
            <td>$<?php echo number_format($precio, 2); ?></td>
            <td>$<?php echo number_format($subtotal, 2); ?></td>
            <td><a href="eliminar_del_carrito.php?id=<?php echo $id; ?>">Eliminar</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Total: $<?php echo number_format($total, 2); ?></h3>

<a href="productos.php">Seguir comprando</a> | 
<a href="checkout.php">Finalizar compra</a>
