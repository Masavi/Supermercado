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

        
			<div class="container">

				<!-- Select de Producto -->
				<div>
                    <p><label for="nom">Selecciona un mes:</label></p>
                    <form id="serial" method=POST>
                        <select id="producto" name="fecha">
                            <option value="2016-01-10">Enero</option>
                            <option value="2016-02-10">Febrero</option>
                            <option value="2016-03-10">Marzo</option>
                            <option value="2016-04-10">Abril</option>
                            <option value="2016-05-10">Mayo</option>
                            <option value="2016-06-10">Junio</option>
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
                var url = "tabla1.php"; // the script where you handle the form input.
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