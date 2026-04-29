<?php
class Conexion {
    // Parámetros de configuración
    private $host = "localhost";
    private $db_name = "el_faro_db";
    private $username = "root"; // Por defecto en XAMPP/WAMP suele ser 'root'
    private $password = "";     // Por defecto en XAMPP/WAMP suele estar vacío
    public $conn;

    // Método principal para establecer la conexión
    public function obtenerConexion() {
        $this->conn = null;

        try {
            // Instanciamos el objeto PDO
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            
            // Forzamos la codificación UTF-8 para evitar problemas con tildes y ñ en los artículos
            $this->conn->exec("set names utf8");
            
            // Configuramos PDO para que lance excepciones (errores detallados) si algo falla
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch(PDOException $exception) {
            // Si la conexión falla, capturamos el error de forma controlada
            echo "<div style='background-color:#ffdddd; color:red; padding:10px;'>";
            echo "<strong>Error Crítico de Base de Datos:</strong> " . $exception->getMessage();
            echo "</div>";
        }

        return $this->conn;
    }
}
?>