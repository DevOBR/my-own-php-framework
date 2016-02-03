<?php namespace Models;

	/**
	 * YOU DON´T NEED TO IMPORT MODEL LIBRARIES WHEN NAMESPACE IS THE SAME
	 */
	 
	class Usuario {
		
		private $nombre;
		private $email;
		private $pass;
		private $fecha_ingreso;
		private $estatus;
		private $id_perfil;
		private $id_puesto;
		private $id_punto_venta;
		private $con;
		
		public function __construct() {
			$this->con = new Conexion();
		}	
		
		public function set($atributo,$contenido) {
			$this->$atributo = $contenido;	
		}
		
		public function get($atributo) {
			return $this->$atributo;
		}
		
		public function listar() {
			$sql = "SELECT usr.id, usr.nombre, usr.email, usr.fecha_ingreso, usr.estatus, psto.nombre AS puesto, perf.nombre as perfil 
					FROM usuario AS usr 
					INNER JOIN puesto AS psto 
					ON usr.id_puesto = psto.id 
					INNER JOIN perfil AS perf 
					ON usr.id_perfil = perf.id;";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
		
		public function add() {
			$sql = "INSERT INTO estudiante(nombre, edad, promedio, imagen, id_seccion, fecha) values('{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}','{$this->id_seccion}',NOW());";
			$this->con->consultaSimple($sql);
		}
		
		public function delete() {
			$sql = "DELETE FROM estudiante WHERE id = '{$this->id}';";
			$this->con->consultaSimple($sql);
		}
		
		public function edit() {
			$sql = "UPDATE estudiante SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}';";
			$this->con->consultaSimple($sql);
		}
		
		public function view() {
			$sql = "SELECT usr.id, usr.nombre, usr.email, usr.pass, usr.estatus, usr.id_perfil, psto.nombre AS puesto
					FROM usuario AS usr 
					INNER JOIN puesto AS psto 
					ON usr.id_puesto = psto.id;";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
	
	/**
	 * others class
	 */
	class Puesto {

	}
	
	class Perfil {
		
	}
	
	class Permiso {
		
	}
	
	class Modulo {
		private $id;
		private $nombre;
		private $con;
		
		public function __construct() {
			$this->con = new Conexion();
		}	
		
		public function set($atributo,$contenido) {
			$this->$atributo = $contenido;	
		}
		
		public function get($atributo) {
			return $this->$atributo;
		}
		
		public function listar() {
			$sql = "";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
		
		public function listarById() {
			$sql = "SELECT modulo.id, modulo.nombre as modulo, modulo.icon, permiso.permiso FROM perfil
					INNER JOIN perfil_permiso ON perfil_permiso.id_perfil = perfil.id
					INNER JOIN permiso ON perfil_permiso.id_permiso = permiso.id
					INNER JOIN modulo ON permiso.id_modulo = modulo.id
					WHERE perfil.id = '{$this->id}';";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
		
		public function view() {
			$sql = ";";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
		
		public function viewById() {
			$sql = "SELECT modulo.id, modulo.nombre as modulo, modulo.icon, permiso.permisoFROM perfil
					INNER JOIN perfil_permiso ON perfil_permiso.id_perfil = perfil.id
					INNER JOIN permiso ON perfil_permiso.id_permiso = permiso.id
					INNER JOIN modulo ON permiso.id_modulo = modulo.id
					WHERE perfil.id = '{$this->id}';";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
		
			
	}
	
	class Sub_modulo {
			
	}


?>