<?php
require_once '../Config/Conexion.php';

class Articulo {
    public $titulo;
    public $descripcion;
    public $imagenURL;
    public $categoria;
    public $enlaceFuente;

    public function __construct($titulo, $descripcion, $imagenURL, $categoria, $enlaceFuente) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->imagenURL = $imagenURL;
        $this->categoria = $categoria;
        $this->enlaceFuente = $enlaceFuente;
    }

    public function guardar() {
        try {
            $conexionBase = new Conexion();
            $conn = $conexionBase->obtenerConexion();

            // Consulta SQL con parámetros nombrados (:titulo, :desc...) para evitar SQL Injection
            $query = "INSERT INTO articulos (titulo, descripcion, imagen_url, categoria, enlace_fuente) 
                      VALUES (:titulo, :descripcion, :imagen_url, :categoria, :enlace_fuente)";
            
            $stmt = $conn->prepare($query);

            // Vinculamos (bind) los valores de los atributos a los parámetros de la consulta
            $stmt->bindParam(':titulo', $this->titulo);
            $stmt->bindParam(':descripcion', $this->descripcion);
            $stmt->bindParam(':imagen_url', $this->imagenURL);
            $stmt->bindParam(':categoria', $this->categoria);
            $stmt->bindParam(':enlace_fuente', $this->enlaceFuente);

            // Ejecutamos la consulta
            if ($stmt->execute()) {
                return true;
            }
            return false;
        } catch(PDOException $e) {
            echo "Error al guardar artículo: " . $e->getMessage();
            return false;
        }
    }
}
?>