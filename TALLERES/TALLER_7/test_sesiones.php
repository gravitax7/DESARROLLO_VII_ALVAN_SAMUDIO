<?php
include 'config_session.php';

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}

echo "Contador de sesión: " . $_SESSION['contador'];
?>