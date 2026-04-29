<?php
// Traemos el modelo de contacto
require_once '../Model/Contacto.php';

class ContactoController {

    public function enviarMensaje() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // Capturamos los datos del formulario
            $nombre = $_POST['nombre_contacto'];
            $mensaje = $_POST['mensaje_contacto'];

            // Instanciamos el modelo
            $nuevoContacto = new Contacto($nombre, $mensaje);

            // Intentamos guardar en la BD
            if ($nuevoContacto->guardar()) {
                echo "<div class='notification is-success'>¡Mensaje enviado con éxito!</div>";
            } else {
                echo "<div class='notification is-danger'>Error al enviar el mensaje.</div>";
            }
        }
    }
}

// Ejecución inmediata al recibir el POST
if (isset($_POST['nombre_contacto'])) {
    $controller = new ContactoController();
    $controller->enviarMensaje();
}
?>