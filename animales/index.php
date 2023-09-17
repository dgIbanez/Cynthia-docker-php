<?php
    require_once('Animal.php');
    require_once('AnimalTerrestre.php');
    require_once('AnimalAcuatico.php');


    $animal = new AnimalTerrestre();


    $animal->comer();