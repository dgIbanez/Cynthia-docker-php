<?php
    require_once('ModelUsuario.php');

    class ControladorUsuario {
    
        public function listarUsuarios() {
            $usuarios = new ModelUsuario();
            $lista = $usuarios->listarUsuarios();
            
            header('Content-Type: application/json');
            echo json_encode($usuarios);
        }
    }