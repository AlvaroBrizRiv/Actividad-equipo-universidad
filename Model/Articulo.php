<?php
class Articulo {
    // Atributos que componen una noticia
    public $titulo;
    public $descripcion;
    public $imagenURL;
    public $categoria;
    public $enlaceFuente;

    // El constructor inicializa el objeto con los datos que le pasemos desde el Controlador
    public function __construct($titulo, $descripcion, $imagenURL, $categoria, $enlaceFuente) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->imagenURL = $imagenURL;
        $this->categoria = $categoria;
        $this->enlaceFuente = $enlaceFuente;
    }

    // Método que se encargará de interactuar con la base de datos
    public function guardar() {
        // [Sprint 4] Aquí irá la consulta SQL (INSERT INTO articulos...)
        // Por el momento, retornamos 'true' para simular que se guardó correctamente en la BD.
        return true; 
    }
}
?>