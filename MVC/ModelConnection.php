<?php
abstract class ConexionBaseDeDatos {
    private $host = "mysql";
    private $usuario = "root";
    private $contrasena = "1234";
    private $nombreBaseDeDatos = "mvc_example";
    protected $conexion;

    public function __construct() {
        $this->conexion = new mysqli(
            $this->host, 
            $this->usuario, 
            $this->contrasena, 
            $this->nombreBaseDeDatos
        );

        if ($this->conexion->connect_error) {
            die("Error de conexión a la base de datos: " . $this->conexion->connect_error);
        }

        $this->conexion->set_charset("utf8");
    }
}
?>
