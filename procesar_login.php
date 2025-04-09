<?php
require_once 'controlador/UsuarioControlador.php';  //si estás en raíz


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    if (!empty($correo) && !empty($contrasena)) {
        $controlador = new UsuarioControlador();
        $controlador->login($correo, $contrasena);
    } else {
        echo "<p style='color:red;'>Por favor, completa todos los campos.</p>";
    }
} else {
    echo "<p style='color:red;'>Acceso no permitido.</p>";
}
?>
