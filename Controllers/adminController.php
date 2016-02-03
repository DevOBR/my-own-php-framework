<?php namespace Controllers;

	use Models\Admin as Admin;
	
	/**
	 * BINDING WITH MODEL Admin
	 * THE CONTROLLER NAME MUST CONTAIN THE SUFFIX (Controller)
	 * WHEN YOU USE A CLASS WHOSE NAMESPACE IS DIFERENT YOUR, YOU´VE TO ADD THE LIBRARY LIKE BEFORE WAS ADDED
	 */
	 
	class adminController {
		
		private $admin;
		public function __construct() {
			$this->admin = new Admin();
		}
		
		public function index() {
			$datos = $this->admin->listarUsuarios();
			if ($datos != NULL) {
				return $datos;
			}	
			else{
				$datos = "Error al cargar los usuarios";
			}
		}
		
		public function listar() {
			$datos = $this->admin->listarUsuarios();
			if ($datos != NULL) {
				return $datos;
			}	
			else{
				$datos = "Error al cargar los usuarios";
			}
		}
		
		public static function mostrarModulosByUser(){
			$adminMenu = new Admin();
			$datos = $adminMenu->modulosByUser();
			return $datos;
		}
	}
?>