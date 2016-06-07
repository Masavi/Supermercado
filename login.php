<?php
	session_start();
	if(isset($_SESSION['email'])){
	echo '<script> window.location="index.php"; </script>';
	}
?>
<!DOCTYPE html>
<html lang="es">
    
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div id="login">
		<h2><span class="fontawesome-lock"></span>Iniciar Sesión</h2>
		<form method="post" action="login_validation.php">             
			<fieldset>
				<p><label for="email">Correo Electrónico</label></p>
				<p><input type="email" id="email" name="email" required></p>
                
				<p><label for="password">Contraseña</label></p>               
				<p><input type="password" id="password" name="password" required></p>
                
				<p><input type="submit" name="login" value="Ingresar"></p>
			</fieldset>
		</form>
	</div>
</body>	
</html>