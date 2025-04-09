<?php
require_once "modelo/UsuarioDAO.php";
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: vistas/login.php");
    exit;
}

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "ID de usuario no proporcionado.";
    exit;
}

if (UsuarioDAO::eliminarUsuario($id)) {
    header("Location: vistas/usuariosADMIN.php");
    exit;
} else {
    echo "Error al eliminar usuario.";
}
?>
