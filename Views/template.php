<?php namespace Views;
	use Controllers\adminController as Admin;
	$template = new Template(Admin::mostrarModulosByUser());
	
	
	class Template {
		
		public function __construct($modulos) {
			ob_start();
?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<title>Dashboard - Bootstrap Admin Template</title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
				<meta name="apple-mobile-web-app-capable" content="yes">
				<link href="<?php echo URL; ?>Views/template/css/bootstrap.min.css" rel="stylesheet">
				<link href="<?php echo URL; ?>Views/template/css/bootstrap-responsive.min.css" rel="stylesheet">
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
				        rel="stylesheet">
				<link href="<?php echo URL; ?>Views/template/css/font-awesome.css" rel="stylesheet">
				<link href="<?php echo URL; ?>Views/template/css/style.css" rel="stylesheet">
				<link href="<?php echo URL; ?>Views/template/css/pages/dashboard.css" rel="stylesheet">
				<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
				<!--[if lt IE 9]>
				      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
				    <![endif]-->
			</head>
			<body>
				<div class="navbar navbar-fixed-top">
				  <div class="navbar-inner">
				    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
				                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php echo URL; ?>admin">Bienvenido a <?php echo PROYECT_NAME; ?></a>
				      <div class="nav-collapse">
				        <ul class="nav pull-right">
				          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
				                            class="icon-cog"></i> Account <b class="caret"></b></a>
				            <ul class="dropdown-menu">
				              <li><a href="javascript:;">Settings</a></li>
				              <li><a href="javascript:;">Help</a></li>
				            </ul>
				          </li>
				          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
				                            class="icon-user"></i> EGrappler.com <b class="caret"></b></a>
				            <ul class="dropdown-menu">
				              <li><a href="javascript:;">Profile</a></li>
				              <li><a href="<?php echo URL . "auth/cerrarSesion";?>">Logout</a></li>
				            </ul>
				          </li>
				        </ul>
				        <form class="navbar-search pull-right">
				          <input type="text" class="search-query" placeholder="Search">
				        </form>
				      </div>
				      <!--/.nav-collapse --> 
				    </div>
				    <!-- /container --> 
				  </div>
				  <!-- /navbar-inner --> 
				</div>
				<!-- /navbar -->
				<div class="subnavbar">
				  <div class="subnavbar-inner">
				    <div class="container">
				      <ul class="mainnav">
				      	<?php while ($rowMod = mysqli_fetch_assoc($modulos)) { ?> 
				      		<?php if ($rowMod['permiso'] == 'ACTIVO') { ?>
						      	<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="<?php echo  $rowMod['icon']; ?>"></i><span><?php echo  $rowMod['modulo']; ?></span> <b class="caret"></b></a>
						          <ul class="dropdown-menu">
						            <li><a href="<?php echo URL; ?>admin/listar">Lista de usuarios</a></li>
						            <li><a href="<?php echo URL; ?>admin">Agregar usuario</a></li>
						          </ul>
						        </li>
						    <?php } ?>
				        <?php } ?>
				      </ul>
				      <!-- /mainnav -->
				    </div>
				    <!-- /container --> 
				  </div>
				  <!-- /subnavbar-inner --> 
				</div>
				<!-- /subnavbar -->
				<div class="">
					<div class="main-inner">
						<div class="container">
<?php		
		}
		
		public function __destruct() {
?>
							
							</div>
							<!-- /container -->
						</div>
						<!-- /main-inner -->
					</div>
					<!-- /main -->
					<div class="footer navbar-fixed-bottom">
					  <div class="footer-inner">
					    <div class="container">
					      <div class="row">
					        <div class="span12"> &copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>. </div>
					        <!-- /span12 --> 
					      </div>
					      <!-- /row --> 
					    </div>
					    <!-- /container --> 
					  </div>
					  <!-- /footer-inner --> 
					</div>
					<!-- /footer -->
					<!-- Placed at the end of the document so the pages load faster --> 
					<script src="<?php echo URL; ?>Views/template/js/jquery-1.7.2.min.js"></script> 
					<script src="<?php echo URL; ?>Views/template/js/excanvas.min.js"></script> 
					<script src="<?php echo URL; ?>Views/template/js/chart.min.js" type="text/javascript"></script> 
					<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
					<script src="<?php echo URL; ?>Views/template/js/base.js"></script>  
				</body>
			</html>

<?php			
			ob_end_flush();
		}
	}


?>