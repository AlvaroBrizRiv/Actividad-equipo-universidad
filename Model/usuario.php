<?php
class Usuario {
    // Atributos
    public $nombre;
    public $apellido;
    public $email;
    public $contrasena;

    // El Constructor es un método especial que se llama automáticamente cuando se crea un objeto de la clase. Se utiliza para inicializar los atributos del objeto.
    public function __construct($nombre, $apellido, $email, $contrasena) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->contrasena = $contrasena;
    }

    // Métodos de la clase 
    public function obtenerSaludo() {
        return "Hola, soy " . $this->nombre . " " . $this->apellido . " y mi correo es " . $this->email;
    }
} 
?>