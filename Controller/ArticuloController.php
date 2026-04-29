<?php
// Requerimos el modelo para poder crear objetos de tipo Articulo
require_once '../Model/Articulo.php';

class ArticuloController {

    public function registrar() {
        // Verificamos que los datos vengan por el método seguro POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // Recolectamos los datos usando los atributos 'name' que le pondremos al formulario HTML
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $imagenURL = $_POST['imagen'];
            $categoria = $_POST['categoria'];
            $enlaceFuente = $_POST['link'];

            // Creamos una nueva instancia del modelo con los datos recibidos
            $nuevoArticulo = new Articulo($titulo, $descripcion, $imagenURL, $categoria, $enlaceFuente);

            // Llamamos al método guardar() del modelo
            if ($nuevoArticulo->guardar()) {
                // Si se guarda con éxito, mostramos una alerta usando las clases de Bulma CSS
                echo "<div class='notification is-success mt-4'>";
                echo "<strong>¡Artículo publicado con éxito en la categoría " . strtoupper($categoria) . "!</strong><br>";
                echo "El título registrado es: " . $nuevoArticulo->titulo;
                echo "</div>";
                
                // Más adelante, aquí agregaremos una redirección al index:
                // header("Location: ../index.php");
            } else {
                echo "<div class='notification is-danger mt-4'>Hubo un error al guardar el artículo.</div>";
            }
        }
    }
}

// Bloque de ejecución: Si el formulario envía los datos a este archivo, creamos el controlador y disparamos la función.
if (isset($_POST['titulo'])) {
    $controlador = new ArticuloController();
    $controlador->registrar();
}
?>