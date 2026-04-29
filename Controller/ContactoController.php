<?php
// 1. FORZAMOS A PHP A MOSTRAR CUALQUIER ERROR (Modo Debug)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../Model/Contacto.php';

class ContactoController {

    public function enviarMensaje() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nombre = $_POST['nombre_contacto'];
            $mensaje = $_POST['mensaje_contacto'];

            $nuevoContacto = new Contacto($nombre, $mensaje);

            // 2. Evaluamos si se guarda correctamente
            if ($nuevoContacto->guardar()) {
                // Redirigimos al index y FORZAMOS el salto a la sección de contacto
                header("Location: ../View/index.php?status=success#seccion-contacto");
                exit(); // Detenemos la ejecución después de redirigir
            } else {
                echo "<div style='background: red; color: white; padding: 20px;'>";
                echo "<h3>Hubo un error al intentar guardar en la base de datos.</h3>";
                echo "<a href='../View/index.php'>Volver al inicio</a>";
                echo "</div>";
            }
        }
    }
}

// Ejecución
if (isset($_POST['nombre_contacto'])) {
    $controller = new ContactoController();
    $controller->enviarMensaje();
} else {
    echo "No se recibieron datos por POST.";
}
?>