<?php namespace Models;
	/**
	 * AUTH CLASS YOU CAN LOGIN YOUT PAGE CONTROLLER
	 * YOU DON´T NEED TO IMPORT MODEL LIBRARIES WHEN NAMESPACE IS THE SAME
	 */
	class Auth {
		
		private $usrs;
		private $auth_usr;
		private $auth_pass;
		private $sesion;
		
		public function __construct() {
			$this->usrs = new Usuario();
		}
		
		public function set($atributo,$contenido) {
			$this->$atributo = $contenido;	
		}
		
		public function get($atributo) {
			return $this->$atributo;
		}
		
		public function iniciarSesion(){
			$band = false;
			try {
    			$datos = $this->usrs->view();
				if (isset($datos)) {
					if ($datos['email'] == $this->auth_usr && $datos['pass'] == $this->auth_pass && $datos['estatus'] == "ACTIVO") {
						$this->sesion[] = Array(
							"id"=>$datos['id'],
							"nombre"=>$datos['nombre'],
							"estatus"=>$datos['estatus'],
							"puesto"=>$datos['puesto'],
							"perfil"=>$datos['id_perfil']
						); 
						
						//Limpio sesión
						session_unset($_SESSION['login']);
						session_destroy($_SESSION['login']);
						$_SESSION = Array();
						
						//Creo una nueva sesión
						$_SESSION['login'] = $this->sesion;  
						
						$band = true;
					}
				}
			} 
			catch (Exception $e) {
			    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			}
			return $band;
		}
		
		public function cerrarSesion(){
			session_unset();
			session_destroy();
			$_SESSION = Array();
		}
		
		public function validarSesion(){
			$datos = array("respuesta"=>false,"valor"=>"");
			if (isset($_SESSION['login'])) {
				$datos= array("respuesta"=>true,"valor"=>$_SESSION['login']);
			}
			return $datos;
		}
		
		public function listarUsuarios(){
			$datos = $this->usrs->listar();
			return $datos;
		}
		
	}

?>