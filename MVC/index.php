<?php 
    require_once('ModelUsuario.php');
    require_once('ControllerUsuario.php');


    $controladorUsuario = new ControladorUsuario();
    $controladorUsuario->listarUsuarios();


    #$persona = new ModelUsuario();
    #$persona->insertarUsuario("prubea2","email.com");


    echo "\n finish";