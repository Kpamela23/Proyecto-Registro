<?php
   public class abstract Persona{

    private $nombre;
    private $apellido;
    private $usuario;
    private $password;
    private $tipoUsuario;

    public function __construct($nombre,
                $apellido,
                $usuario,
                $password,
                $tipoUsuario){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->tipoUsuario = $tipoUsuario;
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
    public function getUsuario(){
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
    public function getTipoUsuario(){
        return $this->tipoUsuario;
    }
    public function setTipoUsuario($tipoUsuario){
        $this->tipoUsuario = $tipoUsuario;
    }
    public function toString(){
        return "Nombre: " . $this->nombre . 
            " Apellido: " . $this->apellido . 
            " Usuario: " . $this->usuario . 
            " Password: " . $this->password . 
            " TipoUsuario: " . $this->tipoUsuario;
    }

?>