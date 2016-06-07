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
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
</head>
    
<body>
<h1 class="titulo">Registros Existentes</h1>

<div id = cont>
    
    <h2>Sucursales</h2>
    <table class="flat-table">
      <tbody>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Delegacion</th>
        </tr>
          <?php 
            $db -> query('SELECT id_sucursal, s.nombre, direccion, d.nombre AS delegacion FROM sucursal s, delegacion d WHERE s.id_delegacion = d.id_delegacion;');
            $result = $db->resultset();
            if (!empty($result)) {
            ?>
                <?php 
                    foreach ($result as $index => $row) 
                    {
                        echo "<tr>";
                            echo "<td>".$row['id_sucursal']."</td>";
                            echo "<td>".$row['nombre']."</td>";
                            echo "<td>".$row['direccion']."</td>";
                            echo "<td>".$row['delegacion']."</td>";
                        echo "</tr>";         
                    }
                ?>
            <?php
            }else echo "No hay información que mostrar";
            ?> 
      </tbody>
    </table>
    <br>
    
    <h2>Cajeros</h2>
    <table class="flat-table2">
      <tbody>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Género</th>
          <th>Edad</th>
          <th>Correo</th>
          <th>Permisos</th>
        </tr>
          <?php 
            $db -> query('SELECT id_cajero, nombre, genero, edad, correo, permiso FROM cajero;');
            $result = $db->resultset();
            if (!empty($result)) {
            ?>
                <?php 
                    foreach ($result as $index => $row) 
                    {
                        echo "<tr>";
                            echo "<td>".$row['id_cajero']."</td>";
                            echo "<td>".$row['nombre']."</td>";
                            switch ($row['genero']) {
                                case 'M': echo "<td> Masculino </td>"; break;
                                case 'F': echo "<td> Femenino </td>"; break;
                            }
                            echo "<td>".$row['edad']."</td>";
                            echo "<td>".$row['correo']."</td>";
                            switch ($row['permiso']) {
                                case '1': echo "<td> Administrador </td>"; break;
                                case '2': echo "<td> Agregar Productos y Cajeros </td>"; break;
                                case '3': echo "<td> Agregar Productos </td>"; break;
                                case '4': echo "<td> Realizar Consultas </td>"; break;
                            }
                        echo "</tr>";         
                    }
                ?>
            <?php
            }else echo "No hay información que mostrar";
            ?> 
      </tbody>
    </table>
    <br>
    
     <h2>Productos</h2>
        <table class="flat-table3">
          <tbody>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>Línea</th>
              <th>Precio</th>
              <th>Sucursal</th>
            </tr>
              <?php 
                $db -> query('SELECT id_producto, p.nombre, linea, precio, s.nombre AS sucursal FROM producto p, sucursal s WHERE p.id_sucursal = s.id_sucursal;');
                $result = $db->resultset();
                if (!empty($result)) {
                ?>
                    <?php 
                        foreach ($result as $index => $row) 
                        {
                            echo "<tr>";
                                echo "<td>".$row['id_producto']."</td>";
                                echo "<td>".$row['nombre']."</td>";
                                echo "<td>".$row['linea']."</td>";
                                echo "<td>$".$row['precio']."</td>";
                                echo "<td>".$row['sucursal']."</td>";
                            echo "</tr>";         
                        }
                    ?>
                <?php
                }else echo "No hay información que mostrar";
                ?> 
          </tbody>
        </table>
        <br>
    
</div>
</body>
</html>

<?php
}else{
  echo '<script> window.location="login.php"; </script>';
}
?>