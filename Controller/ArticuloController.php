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
                // Redirigimos al index, enviamos éxito y saltamos dinámicamente a la categoría actualizada
                $ancla = strtolower($categoria);
                header("Location: ../View/index.php?status=articulo_success#seccion-" . $ancla);
                exit();
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