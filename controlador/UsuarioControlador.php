<?php
require_once __DIR__ . '/../modelo/UsuarioDAO.php';

class UsuarioControlador {
    public function login($correo, $contrasena) {
        session_start();
        $usuario = UsuarioDAO::buscarPorCorreo($correo);
        $ip = $_SERVER['REMOTE_ADDR'];
        $exito = false;

        if ($usuario && password_verify($contrasena, $usuario['password_hash'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['usuario_rol'] = $usuario['rol'];
            $exito = true;
            header("Location: vistas/panelAdmin.php");
            exit;
        }

        UsuarioDAO::registrarAcceso($usuario ? $usuario['id'] : 0, $ip, $exito);
        echo "<p style='color:red;'>Correo o contraseña incorrectos.</p>";
    }
}
?>
