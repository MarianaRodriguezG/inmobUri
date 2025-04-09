<?php
require_once __DIR__ . '/../Conexion.php';

class UsuarioDAO {
    public static function buscarPorCorreo($correo) {
        $conn = Conexion::conectar();
        $sql = "SELECT id, nombre, password_hash, rol FROM usuarios WHERE correo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function registrarAcceso($usuario_id, $ip, $exito) {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare("INSERT INTO login_accesos (usuario_id, ip_acceso, exito) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $usuario_id, $ip, $exito);
        $stmt->execute();
    }
}
?>
