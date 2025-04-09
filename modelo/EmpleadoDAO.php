<?php
require_once "Conexion.php";

class EmpleadoDAO {
    public static function listarEmpleados() {
        $conn = Conexion::conectar();
        $sql = "SELECT * FROM empleados";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function registrarEmpleado($data) {
        $conn = Conexion::conectar();
        $sql = "INSERT INTO empleados (nombre, dni, direccion, telefono, correo, foto, puesto)
                VALUES (:nombre, :dni, :direccion, :telefono, :correo, :foto, :puesto)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':dni', $data['dni']);
        $stmt->bindParam(':direccion', $data['direccion']);
        $stmt->bindParam(':telefono', $data['telefono']);
        $stmt->bindParam(':correo', $data['correo']);
        $stmt->bindParam(':foto', $data['foto']);
        $stmt->bindParam(':puesto', $data['puesto']);
        return $stmt->execute();
    }
}
?>
