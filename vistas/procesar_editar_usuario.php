<?php
require_once "modelo/UsuarioDAO.php";

$data = [
    'id' => $_POST['id'],
    'nombre' => $_POST['nombre'],
    'identificador' => $_POST['identificador'],
    'direccion' => $_POST['direccion'],
    'telefono' => $_POST['telefono'],
    'correo' => $_POST['correo'],
    'rol' => $_POST['rol']
];

if (UsuarioDAO::actualizarUsuario($data)) {
    header("Location: vistas/usuariosADMIN.php");
    exit;
} else {
    echo "Error al actualizar usuario.";
}
?>
