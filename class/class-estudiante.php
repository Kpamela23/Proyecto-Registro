<?php

    class Estudiante extends Persona{
        private $usuario;
        private $password;
        private $carrera;
        private $centro;

        public function __construct( $usuario = null, $password = null, $carrera = null, $centro = null ){
            $this->usuario = $usuario;
            $this->password = $password;
            $this->carrera = $carrera;
            $this->centro = $centro;
        }

        public function getusuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getCarrera(){
            return $this->carrera;
        }

        public function setCarrera($carrera){
            $this->carrera = $carrera;
        }

        public function getCentro(){
            return $this->centro;
        }

        public function setCentro($centro){
            $this->centro = $centro;
        }

        public function matricularClase(){
            
        }

    }
?>