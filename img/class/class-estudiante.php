<?php

    class Estudiante extends Persona{

        private $carrera;
        private $centro;

        public function __construct( $carrera = null, $centro = null ){
            $this->carrera = $carrera;
            $this->centro = $centro;
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
            $archivo = fopen("data/asignaturas-matriculadas.php","a+");

            fwrite($archivo, json_encode($registro)."\n");
            fclose($archivo);
		    return json_encode($registro);
        }

    }
?>