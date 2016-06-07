<?php

	include "db.class.php";
    $db = new database();
	if(isset($_POST["nombre"]) && isset($_POST["linea"]))
	{
		$nom = $_POST["nombre"];
		$lin = $_POST["linea"];
		$price = $_POST["precio"];
        
		$db->query('INSERT INTO producto(nombre,linea,id_sucursal,precio) VALUES (:fname, :linea, 10,'.$price.')');
		$db->bind(':fname', $nom);
		$db->bind(':linea', $lin);
		$db->execute();
        
        echo '<script> alert("Has agregado un producto exitosamente.");</script>';
        echo '<script> window.location="/admin/agregar_producto.php"; </script>';
	}
?>