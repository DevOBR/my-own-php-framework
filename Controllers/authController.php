<?php namespace Controllers;

	use Models\Auth as Auth;
	
	/**
	 * BINDING WITH MODEL Auth AND Modulo
	 * THE CONTROLLER NAME MUST CONTAIN THE SUFFIX (Controller)
	 * WHEN YOU USE A CLASS WHOSE NAMESPACE IS DIFERENT YOUR, YOU´VE TO ADD THE LIBRARY LIKE BEFORE WAS ADDED
	 */
	 
	class authController {
		
		private $auth;
		private $modulos;
		
		public function __construct() {
			$this->auth = new Auth();
		}
		
		public function index() {
			$datos = $this->iniciarSesion();
			return $datos;
		}
				
		public function iniciarSesion(){
			$datos = Array("respuesta"=>false,"valor"=>"Usuario o contraseña incorrectos favor de validar");
			if ($_POST){
				$this->auth->set("auth_usr",strtoupper($_POST['username']));
				$this->auth->set("auth_pass",strtoupper($_POST['password']));
				$resp = $this->auth->iniciarSesion();
				if ($resp) {
					$datos = Array("respuesta"=>true,"valor"=>"Bienvenido");
					header("Location: " . URL ."admin");
				}	
			}
			return $datos;
		}
		
		public function cerrarSesion(){
			$this->auth->cerrarSesion();
			header_remove();
			header("Location: " . URL);
		}
		
		public function validarSesion() {
			$datos = $this->auth->validarSesion();
			return $datos;			
		}
	}
?>