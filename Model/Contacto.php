<?php
require_once '../Config/Conexion.php';

class Contacto {
    public $nombre;
    public $mensaje;

    public function __construct($nombre, $mensaje) {
        $this->nombre = $nombre;
        $this->mensaje = $mensaje;
    }
    // Método para guardar el mensaje de contacto en la base de datos
    public function guardar() {
        try {
            // Obtener conexión a la base de datos
            $conexionBase = new Conexion();
            // Obtener la conexión PDO
            $conn = $conexionBase->obtenerConexion();
            // Preparar la consulta SQL para insertar el mensaje de contacto
            $query = "INSERT INTO contactos (nombre, mensaje) VALUES (:nombre, :mensaje)";
            // Preparar la declaración
            $stmt = $conn->prepare($query);
            // Vincular los parámetros
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':mensaje', $this->mensaje);
            // Ejecutar la declaración
            if ($stmt->execute()) {
                return true;
            }
            return false;
        } catch(PDOException $e) {
            echo "Error al guardar mensaje de contacto: " . $e->getMessage();
            return false;
        }
    }
}
?>