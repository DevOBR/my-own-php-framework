<?php namespace Models;
	/**
	 * CLASS CONEXION GET THE DB OF CONECTION
	 * EXECUTE QUERY 
	 * GET DATA´S QUERY
	 * YOU DON´T NEED TO IMPORT MODEL LIBRARIES WHEN NAMESPACE IS THE SAME
	 */
	class Conexion {
		
		private $datos = array(
			"host"=>HOST,
			"user"=>USR,
			"pass"=>PASS,
			"db"=>DB
		);
		private $con;
		
		public function __construct() {
			$this->con = new \mysqli($this->datos["host"],$this->datos["user"],$this->datos["pass"],$this->datos["db"]);
		}
		
		public function consultaSimple($sql) {
			$this->con->query($sql);
		}
		public function consultaRetorno($sql) {
			$datos = $this->con->query($sql);
			return $datos;
		}
	}
	

?>