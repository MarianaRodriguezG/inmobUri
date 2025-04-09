<?php
require_once "Conexion.php";

class UsuarioDAO {

    public static function buscarPorCorreo($correo) {
        $conn = Conexion::conectar();
        $sql = "SELECT * FROM usuarios WHERE correo = :correo";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function registrarAcceso($usuario_id, $ip, $exito) {
        $conn = Conexion::conectar();
        $sql = "INSERT INTO login_accesos (usuario_id, ip_acceso, exito)
                VALUES (:usuario_id, :ip, :exito)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $stmt->bindParam(':ip', $ip, PDO::PARAM_STR);
        $stmt->bindParam(':exito', $exito, PDO::PARAM_BOOL);
        $stmt->execute();
    }
    

    public static function listarUsuarios() {
        $conn = Conexion::conectar();
        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function registrarUsuario($data) {
        $conn = Conexion::conectar();
        $sql = "INSERT INTO usuarios 
                (nombre, identificador, direccion, telefono, correo, password_hash, foto, rol)
                VALUES (:nombre, :identificador, :direccion, :telefono, :correo, :password_hash, :foto, :rol)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':identificador', $data['identificador']);
        $stmt->bindParam(':direccion', $data['direccion']);
        $stmt->bindParam(':telefono', $data['telefono']);
        $stmt->bindParam(':correo', $data['correo']);
        $stmt->bindParam(':password_hash', $data['password_hash']);
        $stmt->bindParam(':foto', $data['foto']);
        $stmt->bindParam(':rol', $data['rol']);
        return $stmt->execute();
    }


    public static function buscarPorId($id) {
        $conn = Conexion::conectar();
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public static function actualizarUsuario($data) {
        $conn = Conexion::conectar();
        $sql = "UPDATE usuarios SET nombre = :nombre, identificador = :identificador, direccion = :direccion,
                telefono = :telefono, correo = :correo, rol = :rol WHERE id = :id";
        $stmt = $conn->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        return $stmt->execute();
    }
    public static function eliminarUsuario($id) {
        $conn = Conexion::conectar();
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
        

}
?>
