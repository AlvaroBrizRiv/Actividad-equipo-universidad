class Usuario{
    public $nombre;
    public $apellido;
    public $email;
    public $contrasena;

}

public function __construct($nombre, $apellido, $email, $contrasena){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->contrasena = $contrasena;
}

public function obtenerSaludo(){
    return "Hola, soy " . $this->nombre . " " . $this->apellido . " y mi correo es " . $this->email;
}