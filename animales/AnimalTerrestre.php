<?php
    require_once('AnimalAcuatico.php');

    class AnimalTerrestre extends AnimalAcuatico{
        private $cantidadDePatas;


        public function cantidadDePatas(){
            echo "tengo 4 pibe!! <br>";
        }

        public function comer(){
            echo "Estoy con hambre!!!  <br>";
        }

    }