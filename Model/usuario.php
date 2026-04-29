<?php
require_once __DIR__ . '/../Config/Conexion.php';

class Usuario {
    public $nombre;
    public $apellido;
    public $email;
    public $contrasena;

    public function __construct($nombre, $apellido, $email, $contrasena) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        // Importante: En un entorno real, aquí deberíamos encriptar la contraseña (ej. con password_hash)
        $this->contrasena = $contrasena; 
    }

    public function guardar() {
        try {
            $conexionBase = new Conexion();
            $conn = $conexionBase->obtenerConexion();

            $query = "INSERT INTO usuarios (nombre, apellido, email, contrasena) 
                      VALUES (:nombre, :apellido, :email, :contrasena)";
            
            $stmt = $conn->prepare($query);

            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':apellido', $this->apellido);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':contrasena', $this->contrasena);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        } catch(PDOException $e) {
            echo "Error al registrar usuario: " . $e->getMessage();
            return false;
        }
    }

    public function obtenerSaludo() {
        return "Hola, soy " . $this->nombre . " " . $this->apellido . " y mi correo es " . $this->email;
    }

    // Método para obtener todos los usuarios registrados
    public static function obtenerTodos() {
        try {
            $conexionBase = new Conexion();
            $conn = $conexionBase->obtenerConexion();

            // Seleccionamos los usuarios ordenados por el más reciente
            $query = "SELECT id, nombre, apellido, email, fecha_registro FROM usuarios ORDER BY fecha_registro DESC";
            // Ejecutamos la consulta y retornamos los resultados
            $stmt = $conn->prepare($query);
            // No necesitamos parámetros para esta consulta, así que simplemente la ejecutamos
            $stmt->execute();
            // Retornamos un array asociativo con los usuarios
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
            echo "Error al obtener usuarios: " . $e->getMessage();
            return [];
        }
    }
}
?>