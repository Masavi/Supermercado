<?php
	session_start();
    if(isset($_SESSION['email'])){ 
?>

<!DOCTYPE html>
<html lang="es">
    
<head>
	<meta charset="utf-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
    
    <style>
        
        #header{
            margin: 2.5em;
        }
        
        #header h1{
            font-family: 'lato';
            text-align: center;
            font-size: 50px;
        }

        #main{
            margin: 2.5em;
        }
        
        #index{
            text-align: center;
            margin: 50px auto;
            width: 400px;
        }
        
        #index a{
            font-family: 'lato';
        }
        
    </style>
    
</head>

<body>
    
    <header>
        <div id="header">
            <h1>¡Hola <?php echo $_SESSION["nombre"];?>!</h1><br>
        </div>
    </header>
    
    <main>
        <div id="index">
            <a href = "/admin/alta_sucursal.html">Agregar Sucursal </a><br><br>
            <a href = "/admin/alta_producto.html">Agregar Producto</a><br><br>
            <a href="/admin/alta_cajero.html">Agregar Cajero</a><br><br>
            <a href="/usr/mostrarInfo.html">Realizar consultas</a><br><br>
            <a href="/logout.php">Cerrar Sesión</a>
        </div>
    </main>
    
</body>	
</html>

<?php
}else{
  echo '<script> window.location="login.php"; </script>';
}
?>