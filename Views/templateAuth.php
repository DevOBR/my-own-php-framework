<?php namespace Views;
	
	$template = new TemplateAuth();
	
	class TemplateAuth {
		
		public function __construct() {
?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<title>Login - Admin</title>
				
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
				<meta name="apple-mobile-web-app-capable" content="yes"> 
				
				<link href="<?php echo URL; ?>Views/template/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
				<link href="<?php echo URL; ?>Views/template/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
				
				<link href="<?php echo URL; ?>Views/template/css/font-awesome.css" rel="stylesheet">
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
				
				<link href="<?php echo URL; ?>Views/template/css/style.css" rel="stylesheet" type="text/css">
				<link href="<?php echo URL; ?>Views/template/css/pages/signin.css" rel="stylesheet" type="text/css">
			</head>
			<body>
<?php		
		}
		
		public function __destruct() {
?>					
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
					<script src="<?php echo URL; ?>Views/template/js/jquery-1.7.2.min.js"></script>
					<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
					<script src="<?php echo URL; ?>Views/template/js/signin.js"></script>
					<!-- /scrips -->
				</body>
			</html>

<?php			
		}
	}


?>