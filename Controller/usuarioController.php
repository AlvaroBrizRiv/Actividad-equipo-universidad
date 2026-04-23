<?php
// Primero, necesitamos "traer" el molde (Modelo) para poder usarlo en nuestro controlador. Esto se hace con "require_once".
require_once '../Model/usuario.php';

class UsuarioController {

    // Esta función se encargará de recibir y procesar los datos del formulario de registro. Es el "controlador" que maneja la lógica de negocio.
    public function registrar() {
        // 1. Verificamos si los datos vienen por el método POST (seguridad).
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // 2. Recolectamos los datos de los "inputs" del formulario.
            // Usamos las claves definidas  (name="nombre", etc.)
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];

            // 3. Creamos un nuevo objeto (instancia) de la clase Usuario.
            // Aquí usamos el constructor que se definió en el Modelo para inicializar el objeto con los datos del formulario.
            $nuevoUsuario = new Usuario($nombre, $apellido, $email, $contrasena);

            // 4. Lógica de respuesta: aquí se guardarían en la BD.
            // Mostraremos el saludo dinámico creado con el método obtenerSaludo() del Modelo.
            echo "<div class='notification is-success'>";
            echo "<strong>¡Registro Exitoso!</strong><br>";
            echo $nuevoUsuario->obtenerSaludo(); 
            echo "</div>";
            
            // 5. Finalmente, podríamos cargar una vista de éxito o redirigir a otra página.
            // require_once '../View/registro_exito.php';
        }
    }
}
?>