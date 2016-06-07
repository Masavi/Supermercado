<?php
	session_start();
    if( (isset($_SESSION['permiso'])) && ( ($_SESSION['permiso']==1) || ($_SESSION['permiso']==2) ) ){ 
?>

<!DOCTYPE html>
<html lang="es">
    
<head>
	<meta charset="utf-8">
	<title>Alta Cajero</title>
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div id="login">

		<h2><span class="fontawesome-lock"></span>Agregar Cajero</h2>

		<form action="alta_cajero.php" method="POST" > 
            
			<fieldset>
                <p><label for="NomSuc">Nombre</label></p>
                <p><input type="text" style="background-color:#e6e6e6;width:21.75em;" name="nombre">
                
                <p><label>Genero</label></p>
                    <select name="genero">
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                    </select>
                <br><br>
                <p><label for="Edad">Edad</label></p>
                <p><input type="number" style="background-color:#e6e6e6;width:21.75em;" name="edad">

                <p><label for="Correo">Correo</label></p>
                <p><input type="email" style="background-color:#e6e6e6" name="correo">
                
                <p><label for="Contraseña">Contraseña</label></p>
                <p><input type="password" style="background-color:#e6e6e6" name="password">
                
                <?php
                    if($_SESSION['permiso']==1)
                    { 
                        echo '<p><label>Permisos de Sistema</label></p>';
                        echo '    <select name="permiso">';
                        echo '      <option value="1">Administrador</option>';
                        echo '      <option value="2">Agregar Productos y Cajeros</option>';
                        echo '      <option value="3">Agregar Cajeros</option>';
                        echo '      <option value="4">Sólo Consultas</option>';
                        echo '    </select>';
                        echo '<br><br>';
                    }
                    else if($_SESSION['permiso']==2)
                    { 
                        echo '<p><label>Permisos de Sistema</label></p>';
                        echo '    <select name="permiso">';
                        echo '      <option value="2">Agregar Productos y Cajeros</option>';
                        echo '      <option value="3">Agregar Cajeros</option>';
                        echo '      <option value="4">Sólo Consultas</option>';
                        echo '    </select>';
                        echo '<br><br>';
                    }
                ?>

				<p><input type="submit" value="Registrar"></p><br>
                <div style="text-align:center">
                <a href="/" style="text-decoration:none"><input type="button" value="Volver a inicio"></a>
                </div>
                
			</fieldset>

		</form>

	</div>
</body>	
</html>

<?php
}else{
  echo '<script> window.location="/"; </script>';
}
?>
