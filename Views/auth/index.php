<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo URL; ?>">
				Login			
			</a>		
			<!--<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="<?php echo URL; ?>auth/registro" class="">
							¿No tienes una cuenta?
						</a>
					</li>-->
					<!-- <li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
					</li> -->
				<!--</ul>
			</div>--><!--/.nav-collapse -->	
		</div> <!-- /container -->
	</div> <!-- /navbar-inner -->
</div> <!-- /navbar -->
<div class="account-container">
	<div class="content clearfix">
		
		<?php if($_POST){ ?>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>Woops! </strong> <?php echo $datos['valor']; ?>
		</div>
		<?php }?>	
		
		<form action="#" method="post">
			<h2>Login</h2>
			<div class="login-fields">
				<p>Por favor proporciona tu información de ingreso.</p>
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Usuario" class="login username-field" required/>
				</div> <!-- /field -->
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login password-field" required/>
				</div> <!-- /password -->
			</div> <!-- /login-fields -->
			<div class="login-actions">
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Recordarme</label>
				</span>
				<button class="button btn btn-success btn-large">Ingresar</button>
			</div> <!-- .actions -->
		</form>
	</div> <!-- /content -->
</div> <!-- /account-container -->