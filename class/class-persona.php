<?php

    abstract class Persona{
        private $nombre;
        private $apellido;

        public function __construct( $nombre = null, $apellido = null ){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
    }
?>