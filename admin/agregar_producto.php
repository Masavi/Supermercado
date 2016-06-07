<?php
	session_start();
    if( (isset($_SESSION['permiso'])) && ( ($_SESSION['permiso']==1) || ($_SESSION['permiso']==2) || ($_SESSION['permiso']==3) )  ){ 
?>

<!DOCTYPE html>
<html lang="es">
    
<head>
	<meta charset="utf-8">
	<title>Alta Producto</title>
    <link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div id="login">

		<h2><span class="fontawesome-lock"></span>Agregar Producto</h2>

		<form action="alta_producto.php" method="POST"> 
            
			<fieldset>
                
				<p><label for="nom">Nombre del Producto:</label></p>
				<p><input type="text" id="nom" name="nombre" style="background-color:#e6e6e6"></p>
                
                <p><label for="nom">Línea:</label></p>
                <select name = "linea">
                    <option value="Alimentos">Alimentos</option>
                    <option value="Electrodomésticos">Comida</option>
                    <option value="Electrónica">Electrónica</option>
                    <option value="Limpieza">Limpieza</option>
                    <option value="Muebles">Muebles</option>
                    <option value="Ropa">Ropa</option>
                    <option value="Deportes">Deportes</option>
                </select><br><br>
                
                <p><label for="precio">Precio:</label></p>
                <p><input type="number" style="background-color:#e6e6e6" id="precio" name="precio"></p><br>
                
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