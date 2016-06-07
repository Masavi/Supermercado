<?php
	session_start();
    require_once('db.class.php');
    $db = new database();
    if(isset($_SESSION['email'])){ 
?>

<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <title>Mostrar Informacion</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
</head>
    
<body>
<h1 class="titulo">Consultas</h1>

<div id = cont>

        
			<div class="container">

				<!-- Select de Producto -->
				<div>
                    <p><label for="nom">Selecciona un producto:</label></p>
                    <form id="serial" method=POST>
                        <select id="producto" name="producto">
                              <?php
                                  $db -> query('SELECT id_producto, nombre FROM producto');
                                  $result = $db->resultset();
                                  foreach ($result as $index => $row) {
                                    echo "<option value=\"".$row['id_producto'].'">'.$row['nombre']."</option>\n\r";
                                  }
                              ?>
                        </select>
                    </form>
				</div>

                
                <!-- Div donde se introduce la tabla generada con la información de la sucursal seleccionada -->
				<div id="informacion"></div>
                
			 </div>
</div>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

		<script>
		$(document).ready(function () {
			$('#producto').change(function() {
                var url = "tabla3.php"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#serial").serialize(), // serializes the form's elements.
                    success: function(data){
                        document.getElementById("informacion").innerHTML = data;
                    }
                });
			});
		});
		</script>

    

</body>
</html>

<?php
}else{
  echo '<script> window.location="login.php"; </script>';
}
?>