<?php
require_once 'config_session.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: productos.php');
    exit;
}


if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    die('Error de validación CSRF.');
}

$producto_id = isset($_POST['producto_id']) ? (int)$_POST['producto_id'] : 0;
$cantidad = isset($_POST['cantidad']) ? (int)$_POST['cantidad'] : 0;

if ($producto_id <= 0 || $cantidad <= 0) {
    header('Location: productos.php');
    exit;
}

$productos = [
    1 => ['nombre' => 'Camiseta', 'precio' => 15.00],
    2 => ['nombre' => 'Jeans', 'precio' => 40.00],
    3 => ['nombre' => 'Zapatillas', 'precio' => 60.00],
    4 => ['nombre' => 'Gorra', 'precio' => 10.00],
    5 => ['nombre' => 'Mochila', 'precio' => 35.00],
];

if (!isset($productos[$producto_id])) {
    header('Location: productos.php');
    exit;
}


if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if (isset($_SESSION['carrito'][$producto_id])) {
    $_SESSION['carrito'][$producto_id] += $cantidad;
} else {
    $_SESSION['carrito'][$producto_id] = $cantidad;
}

$_SESSION['ultima_actividad'] = time();

header('Location: ver_carrito.php');
exit;
