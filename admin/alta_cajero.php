<?php

	include "db.class.php";
    $db = new database();
	if(isset($_POST["nombre"]) && isset($_POST["genero"]))
	{
		$nom = $_POST["nombre"];
		$gen =$_POST["genero"];
		$email = $_POST["correo"];
		$edad = $_POST["edad"];
        $pass = $_POST["password"];
        
		$db->query('INSERT INTO cajero(nombre,genero,edad,correo,pass) VALUES (:fname, :genero,'.$edad.',:mail ,:pass)');
		$db->bind(':fname', $nom);
		$db->bind(':genero', $gen);
		$db->bind(':mail', $email);
		$db->bind(':pass', $pass);
		$db->execute();
        echo '<script> alert("Has agregado un cajero exitosamente.");</script>';
		echo '<script> window.location="/admin/alta_cajero.php"; </script>';
	}
?>