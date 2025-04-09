<?php
require_once "Conexion.php";

class PropiedadDAO {
    public static function listarPropiedades() {
        $conn = Conexion::conectar();
        $sql = "SELECT * FROM propiedades";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function registrarPropiedad($data) {
        $conn = Conexion::conectar();
        $sql = "INSERT INTO propiedades 
                (codigo, fecha_alta, titulo, descripcion, tipo, estado, ubicacion, habitaciones, banios, pisos,
                 garage, dimensiones, precio, moneda, servicios, url_foto_principal, pais, ciudad,
                 propietario, telefono_propietario)
                VALUES (:codigo, :fecha_alta, :titulo, :descripcion, :tipo, :estado, :ubicacion, :habitaciones, 
                        :banios, :pisos, :garage, :dimensiones, :precio, :moneda, :servicios, :url_foto_principal,
                        :pais, :ciudad, :propietario, :telefono_propietario)";
        $stmt = $conn->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        return $stmt->execute();
    }
}
?>
