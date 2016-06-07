<?php

	include "db.class.php";
    $db = new database();
	if(isset($_POST["nombre"]) && isset($_POST["direccion"]))
	{
		$nom = $_POST["nombre"];
		$dir = $_POST["direccion"];
		$del = $_POST["delegacion"];
        
		$db->query('INSERT INTO sucursal(nombre, direccion, id_delegacion) VALUES (:fname, :dir, :del)');
		$db->bind(':fname', $nom);
		$db->bind(':dir', $dir);
        $db->bind(':del', $del);
		$db->execute();
        
        echo '<script> alert("Has agregado una sucursal exitosamente.");</script>';
        echo '<script> window.location="/admin/alta_producto.html"; </script>';
	}
?>