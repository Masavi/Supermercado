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
		<form action="javascript:void(0);" method="POST">             
			<fieldset>
				<p><label for="email">Usuario</label></p>
				<p><input type="email" id="email" value="No.Trabajador" onBlur="if(this.value=='')this.value='No.Trabajador'" onFocus="if(this.value=='No.Trabajador')this.value=''"></p>
                
				<p><label for="password">Contraseña</label></p>               
				<p><input type="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p>
                
				<p><input type="submit" value="Ingresar"></p>
			</fieldset>
		</form>
	</div>
</body>	
</html>