<?php
require_once "modelo/Conexion.php";

try {
    $conn = Conexion::conectar();
    echo "<h2>✅ Conexión exitosa a la base de datos.</h2>";

    // Opcional: verificar si hay usuarios
    $stmt = $conn->query("SELECT COUNT(*) FROM usuarios");
    $total = $stmt->fetchColumn();
    echo "<p>Usuarios registrados: $total</p>";

    Conexion::desconectar();
} catch (Exception $e) {
    echo "<h2>❌ Error al conectar:</h2>";
    echo "<pre>" . $e->getMessage() . "</pre>";
}
?>
