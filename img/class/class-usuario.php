<?php

	class Usuario{

		private $usuario;
		private $password;
		private $tipoUsuario;
		private $nombre;
		private $carrera;

		public function __construct(
            $usuario= null
			$password=null
			$tipoUsuario=null
			$nombre=null
            $carrera = null
        ){
			$this->usuario = $usuario;
			$this->password = $password;
			$this->tipoUsuario = $tipoUsuario;
			$this->nombre = $nombre;
			$this->carrera = $carrera;
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
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getCarrera(){
			return $this->carrera;
		}
		public function setCarrera($carrera){
			$this->carrera = $carrera;
		}
		public function __toString(){
            $var ="Usuario{"
			."Usuario: ".$this->usuario." , " 
			." Password: ".$this->password. 
			." TipoUsuario: ".$this->tipoUsuario. 
			." Nombre: ".$this->nombre. 
            ." Carrera: ".$this->carrera;
            return $var."}";
		}
    }
    
    public function guardarUsuario(){
		$archivo = fopen("../data/Usuarios.json","a+");
        $registro["usuario"] = $this->usuario;
        $registro["password"] = $this->password;
        $registro["tipoUsuario"] = $this->tipoUsuario;
        $registro["nombre"] = $this->nombre;
        $registro["carrera"] = $this->carrera;
		fwrite($archivo, json_encode($registro)."\n");
		fclose($archivo);
		return json_encode($registro);
	}
?>
	

