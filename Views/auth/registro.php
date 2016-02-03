<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="index.html">
				Admin				
			</a>		
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="<?php echo URL; ?>auth" class="">
							¿Ya tienes una cuenta?, ingresa ahora!
						</a>
					</li>
					<li class="">						
						<a href="<?php echo URL; ?>auth" class="">
							<i class="icon-chevron-left"></i>
							Regresar a pagina anterior
						</a>
					</li>
				</ul>
			</div><!--/.nav-collapse -->	
		</div> <!-- /container -->
	</div> <!-- /navbar-inner -->
</div> <!-- /navbar -->
<div class="account-container register">
	<div class="content clearfix">
		<form action="#" method="post">
			<h1>Registrar una cuenta</h1>			
			<div class="login-fields">
				<p>Crea tu cuenta:</p>
				<div class="field">
					<label for="firstname">Nombre:</label>
					<input type="text" id="firstname" name="firstname" value="" placeholder="Nombre" class="login" />
				</div> <!-- /field -->
				<div class="field">
					<label for="lastname">Apellido paterno:</label>	
					<input type="text" id="lastname" name="lastname" value="" placeholder="Apellido paterno" class="login" />
				</div> <!-- /field -->
				<div class="field">
					<label for="lastnamem">Apellido materno:</label>	
					<input type="text" id="lastnamem" name="lastnamem" value="" placeholder="Apellido materno" class="login" />
				</div> <!-- /field -->
				<div class="field">
					<label for="email">Direccion de correo:</label>
					<input type="text" id="email" name="email" value="" placeholder="Email" class="login"/>
				</div> <!-- /field -->
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login"/>
				</div> <!-- /field -->
				<div class="field">
					<label for="confirm_password">Confirmar Password:</label>
					<input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirmar password" class="login"/>
				</div> <!-- /field -->
			</div> <!-- /login-fields -->
			<div class="login-actions">
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Deacuerdo con los terminos & condiciones.</label>
				</span>
				<button class="button btn btn-primary btn-large">Registrarse</button>
			</div> <!-- .actions -->
		</form>
	</div> <!-- /content -->
</div> <!-- /account-container -->
<!-- Text Under Box -->
<div class="login-extra">
	¿Ya tienes una cuenta? <a href="<?php echo URL; ?>auth">Ingresa a tu cuenta</a>
</div> <!-- /login-extra -->