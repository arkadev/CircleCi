<!DOCTYPE HTML> 
<html>
	<head>
		<title>Registrarse</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css'?>">
	</head>
	<body>
		<div class="baner-login">
			<div class="baner-dates-register">
				<a href="">
					<div class="close-login">
						<img src="<?= base_url() . 'assets/img/close.png'?>" class="icon-close">
					</div>
				</a>
				<div class="logo-login">
					<img src="<?= base_url() . 'assets/img/logoD.png'?>" class="img-log">
				</div>
				<form>
					<div class="input-container">
						<input type="text"  required="required"/>
						<label for="#{label}">Correo Electrónico</label>
						<div class="bar"></div>
					</div>
					<div class="input-container">
						<input type="password"  required="required"/>
						<label>Contraseña</label>
						<div class="bar"></div>
					</div>
					<div class="input-container">
						<input type="password"  required="required"/>
						<label>Confirmar contraseña</label>
						<div class="bar"></div>
					</div>
					<div class="button-container">
						<button><span>REGISTRAR</span></button>
					</div>
					<div class="footer register"><a href="#">Iniciar sesión</a></div>
				</form>
			</div>
		</div>
	</body>
</html>