<?php
	session_start();
    require_once('db.class.php');
    if(isset($_SESSION['email'])){ 
?>

<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <title>Mostrar Informacion</title>
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
</head>
    
<body>
<h1 class="titulo">Consultas</h1>

<div id = cont>
    <a href = "/consultas/ventas_mes.php">Ventas por mes</a><br><br>
    <a href = "/consultas/ventas_cajero.php">Ventas por periodo por cajero</a><br><br>
    <a href = "/consultas/ventas_producto.php">Ventas por producto</a><br><br>
    <a href = "/">Regresar a Inicio</a><br><br>   
</div>
</body>
</html>

<?php
}else{
  echo '<script> window.location="login.php"; </script>';
}
?>