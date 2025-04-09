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
            try {
                UsuarioDAO::registrarAcceso($usuario['id'], $ip, $exito);
            } catch (Exception $e) {
                echo "<pre>Error al registrar acceso (éxito): " . $e->getMessage() . "</pre>";
            }
            header("Location: panelAdmin.php");
            exit;
        }
    
        try {
            UsuarioDAO::registrarAcceso($usuario ? $usuario['id'] : 0, $ip, $exito);
        } catch (Exception $e) {
            echo "<pre>Error al registrar acceso (fallido): " . $e->getMessage() . "</pre>";
        }
    
        echo "<p style='color:red;'>Correo o contraseña incorrectos.</p>";
    }
    
    
}
?>

