<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $usuario = "root";
        $contrasena = "root"; //por default
        $base = "inmuri_db";

        $conn = new mysqli($host, $usuario, $contrasena, $base);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
        $conn->set_charset("utf8mb4");
        return $conn;
    }
}
?>
