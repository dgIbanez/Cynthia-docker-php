<?php 
    require_once('ControllerUsuario.php');

    $persona = new ControladorUsuario();
    $persona->insertarUsuario("Diego", "hambre.hambre@gmial.com");


    $controladorUsuario = new ControladorUsuario();
    $arrayDeUsuarios = $controladorUsuario->listarUsuarios();

    #echo "<pre>". print_r($arrayDeUsuarios,true) . "</pre>";
    echo json_encode($arrayDeUsuarios);