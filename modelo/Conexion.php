<?php
/**
 * Clase que manejará la conexión a la base de datos usando PDO (MySQL)
 */
class Conexion
{
    private static $servidor = 'localhost';
    private static $db = 'inmuri_db';
    private static $usuario = 'root';
    private static $password = 'root';
    private static $charset = 'utf8mb4';
    
    private static $conexion = null;

    // No se permite instanciar la clase
    public function __construct() {
        exit('Instancia no permitida');
    }

    /**
     * Abre una conexión PDO a la base de datos si no existe aún
     */
    public static function conectar()
    {
        if (self::$conexion === null) {
            try {
                $dsn = "mysql:host=" . self::$servidor . ";dbname=" . self::$db . ";charset=" . self::$charset;
                self::$conexion = new PDO($dsn, self::$usuario, self::$password);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                exit("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$conexion;
    }

    /**
     * Cierra la conexión actual
     */
    public static function desconectar()
    {
        self::$conexion = null;
    }
}
?>
