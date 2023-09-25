<?php
    require_once('ModelUsuario.php');

    class ControladorUsuario {
    
        public function listarUsuarios() {
            $usuarios = new ModelUsuario();
            $lista = $usuarios->listarUsuarios();

            return $lista;
        }

        public function InsertarUsuario($nombre, $email) {
            $usuario = new ModelUsuario();
            $usuario->nombre = $nombre;
            $usuario->email = $email;

            $usuario->InsertarUsuario($nombre, $email);
        }
    }