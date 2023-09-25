<?php
    require_once('ModelConnection.php');

    class ModelUsuario extends ConexionBaseDeDatos {

        public $nombre;
        public $email;
        
        
        public function InsertarUsuario($nombre, $email) {
            $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    
            $resultado = $this->conexion->query($sql);

            $this->verificarQuery($resultado);
    
            $this->conexion->close();
        }

        public function listarUsuarios() {
            $sql = "SELECT * FROM usuarios";
            $resultado = $this->conexion->query($sql);

            $this->verificarQuery($resultado);

            $usuarios = [];

            while ($fila = $resultado->fetch_assoc()) {
                $usuarios[] = $fila;
            }

            $resultado->free_result();
            return $usuarios;
        }

        private function verificarQuery($resultado){
            if ($resultado === false) {
                die("Error en la consulta: " . $this->conexion->error);
            }
        }
    }
    