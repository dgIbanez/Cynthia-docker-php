<?php
    require_once('ModelConnection.php');

    class ModelUsuario extends ConexionBaseDeDatos {

        public $nombre;
        public $email;
        
        
        public function insertarUsuario($nombre, $email) {
            $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    
            $resultado = $this->conexion->query($sql);
    
            if ($resultado === false) {
                die("Error en la consulta: " . $this->conexion->error);
            }
    
            $this->conexion->close();
        }

        public function listarUsuarios() {
            $sql = "SELECT * FROM usuarios";
            $resultado = $this->conexion->query($sql);

            if ($resultado === false) {
                die("Error en la consulta: " . $this->conexion->error);
            }

            $usuarios = [];

            while ($fila = $resultado->fetch_assoc()) {
                $usuarios[] = $fila;
            }

            $resultado->free_result();
            return $usuarios;
        }
    }
    