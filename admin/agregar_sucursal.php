<?php
	session_start();
    if((isset($_SESSION['permiso'])) && ($_SESSION['permiso']==1)){ 
?>

<!DOCTYPE html>
<html lang="es">
    
<head>
	<meta charset="utf-8">
	<title>Alta Sucursal</title>
    <link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div id="login">

		<h2><span class="fontawesome-lock"></span>Agregar Sucursal</h2>

		<form action="alta_sucursal.php" method="POST"> 
            
			<fieldset>
                
                <p><label for="NomSuc">Nombre:</label></p>
                <p><input type="text" style="background-color:#e6e6e6;width:20em;" name="nombre"></p>
                
                <p><label for="Dir">Dirección:</label></p>
                <p><input type="text" style="background-color:#e6e6e6;width:20em;" name="direccion"></p>
                
                <p><label for="Del">Delegacion:</label></p>
                <select name = "delegacion">
                    <option value="1">Coyoacán</option>
                    <option value="2">Cuajimalpa</option>
                    <option value="3">Álvaro Obregón</option>
                    <option value="4">Benito Juarez</option>
                    <option value="5">Iztacalco</option>
                    <option value="6">Iztapalapa</option>
                    <option value="7">Xochimilco</option>
                    <option value="8">Tlalpan</option>
                    <option value="9">Cuauhtémoc</option>
                    <option value="10">Venustiano Carranza</option>
                </select><br><br>

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
