<?php 
require_once('db.class.php');
$db = new database();

$db -> query('SELECT count(*) AS cantidad FROM venta, sucursal WHERE venta.id_sucursal = sucursal.id_sucursal AND sucursal.id_sucursal = 1 AND fecha LIKE :fecha;');
$db->bind(':fecha', $_POST['fecha']);
$result = $db->resultset();

if (!empty($result)) {
?>

<table align="center" class="flat-table">
     <thead>
         <tr>
             <th>Ventas Totales Realizadas</th>
         </tr>
     </thead>

     <tbody>
         <?php 
             foreach ($result as $index => $row) {
                 echo "<tr>";
                     echo "<td>".$row['cantidad']."</td>";
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
