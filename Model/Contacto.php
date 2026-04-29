<?php
require_once '../Config/Conexion.php';

class Contacto {
    public $nombre;
    public $mensaje;

    public function __construct($nombre, $mensaje) {
        $this->nombre = $nombre;
        $this->mensaje = $mensaje;
    }

    public function guardar() {
        try {
            $conexionBase = new Conexion();
            $conn = $conexionBase->obtenerConexion();

            $query = "INSERT INTO contactos (nombre, mensaje) VALUES (:nombre, :mensaje)";
            
            $stmt = $conn->prepare($query);

            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':mensaje', $this->mensaje);

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