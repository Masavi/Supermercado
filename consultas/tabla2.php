<?php 
require_once('db.class.php');
$db = new database();

$db -> query('SELECT count(*) AS cantidad, nombre FROM venta, cajero WHERE venta.id_cajero = cajero.id_cajero AND fecha LIKE :fecha GROUP BY nombre;');
$db->bind(':fecha', $_POST['fecha']);
$result = $db->resultset();

if (!empty($result)) {
?>

<table align="center" class="flat-table">
     <thead>
         <tr>
             <th>Ventas Realizadas</th>
             <th>Cajero</th>
         </tr>
     </thead>

     <tbody>
         <?php 
             foreach ($result as $index => $row) {
                 echo "<tr>";
                     echo "<td>".$row['cantidad']."</td>";
                     echo "<td>".$row['nombre']."</td>";
             }
         ?>  
     </tbody>
</table>
<?php
}
else echo "<table class=\"tabla-gerente\">
<thead>
<tr><td>Aún no hay información de pedidos para mostrar</td></tr>
</thead>
</table>";
?>
