<?php

	session_start();
	//Config proyect properties
	define('PROYECT_NAME', 'CPClient');
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define("URL", "http://host/frame/");
	
	//Config Data base´s properties
	define("HOST", "host");
	define("USR", "user");
	define("PASS", "pass");
	define("DB", "bd_name");
	
	//Run
	require_once "Config/Autoload.php";
	Config\Autoload::run();
	
	use Controllers\authController as Login;
	
	$auth = new Login();
	$datos = $auth->validarSesion();
	
	if($datos['respuesta']){
		
		define("DEF_INDEX", "admin");
		require_once "Views/template.php";
	}
	else{
		define("DEF_INDEX", "auth");
		require_once "Views/templateAuth.php";
	}
	
	Config\Enrutador::run(new Config\Request());
?>