<?php namespace Models;
	
	/**
	 * TO ADMIN ALL INTERFACE
	 * IT WAS USE USER MODEL AND AUTH MODEL
	 * YOU DON´T NEED TO IMPORT MODEL LIBRARIES WHEN NAMESPACE IS THE SAME
	 */
	 
	class Admin {
		
		private $auth;
		private $usrs;
		private $modulos;
		public function __construct() {
			$this->auth = new Auth();
			$this->usrs = new Usuario();
			$this->modulos = new Modulo();
		}
		
		public function listarUsuarios() {
			$sesion = $this->auth->validarSesion();
			if ($sesion['respuesta']) {
				$datos =  array("sesion"=>$sesion,"valor"=>$this->usrs->listar());
				return $datos;
			}
			else {
				header("Location: " . URL);
			}
		}
		
		
		
		public function modulosByUser(){
			$sesion = $this->auth->validarSesion();
			
			if ($sesion['respuesta']) {
				
				$modulo = new Modulo();
				$modulo->set("id",$sesion['valor'][0]['perfil']);
				$datos = $modulo->listarById();
				
				if ($datos != null) {
					return $datos;
				} 
				else {
					header("location:" . URL);
				}
				
			}
			else {
				header("Location: " . URL);
			}
		}
	}
	

?>