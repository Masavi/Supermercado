<?php 
require_once('db.class.php');
$db = new database();

$db -> query('SELECT count(*) AS cantidad, fecha FROM venta, sucursal, producto WHERE venta.id_sucursal = sucursal.id_sucursal AND sucursal.id_sucursal = producto.id_sucursal AND producto.id_producto LIKE :producto GROUP BY fecha;');
$db->bind(':producto', $_POST['producto']);
$result = $db->resultset();

if (!empty($result)) {
?>

<table align="center" class="flat-table">
     <thead>
         <tr>
             <th>Ventas Realizadas</th>
             <th>Mes</th>
         </tr>
     </thead>

     <tbody>
         <?php 
             foreach ($result as $index => $row) {
                 echo "<tr>";
                     echo "<td>".$row['cantidad']."</td>";
                     switch ($row['fecha']) {
                                case '2016-01-10': echo "<td> Enero </td>"; break;
                                case '2016-02-10': echo "<td> Febrero </td>"; break;
                                case '2016-03-10': echo "<td> Marzo </td>"; break;
                                case '2016-04-10': echo "<td> Abril </td>"; break;
                                case '2016-05-10': echo "<td> Mayo </td>"; break;
                                case '2016-06-10': echo "<td> Junio </td>"; break;
                            }
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
