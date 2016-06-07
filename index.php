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
            
            <?php
                if($_SESSION['permiso']==1)
                { 
                echo'<a href = "/admin/agregar_sucursal.php">Agregar Sucursal </a><br><br>';
                echo'<a href = "/admin/agregar_producto.php">Agregar Producto</a><br><br>';
                echo'<a href="/admin/agregar_cajero.php">Agregar Cajero</a><br><br>';
                echo'<a href="/usr/mostrarInfo.php">Realizar consultas</a><br><br>';
                echo'<a href="/logout.php">Cerrar Sesión</a>';
                }
                else if($_SESSION['permiso']==2)
                { 
                echo'<a href = "/admin/agregar_producto.php">Agregar Producto</a><br><br>';
                echo'<a href="/admin/agregar_cajero.php">Agregar Cajero</a><br><br>';
                echo'<a href="/usr/mostrarInfo.php">Realizar consultas</a><br><br>';
                echo'<a href="/logout.php">Cerrar Sesión</a>';
                }
                else if($_SESSION['permiso']==3)
                { 
                echo'<a href = "/admin/agregar_producto.php">Agregar Producto</a><br><br>';
                echo'<a href="/usr/mostrarInfo.php">Realizar consultas</a><br><br>';
                echo'<a href="/logout.php">Cerrar Sesión</a>';
                }
                else if($_SESSION['permiso']==4)
                { 
                echo'<a href="/usr/mostrarInfo.php">Realizar consultas</a><br><br>';
                echo'<a href="/logout.php">Cerrar Sesión</a>';
                }
            ?>
            
        </div>
    </main>
    
</body>	
</html>

<?php
}else{
  echo '<script> window.location="login.php"; </script>';
}
?>
