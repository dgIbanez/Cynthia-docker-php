<?php
    require_once('Animal.php');
    
    class AnimalAcuatico extends Animal{
        private $cantidadDeColores;


        public function cantidadDeColores(){
            echo "The rainbow!! <br>";
        }

        public function comer(){
            echo "Estoy loco!!!  <br>";
        }


    }