<?php
require_once '../Config/Conexion.php';

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
}
?>