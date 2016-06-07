<?php

	include "db.class.php";
	if(isset($_POST["nombre"]) && isset($_POST["genero"]))
	{
		$nom = $_POST["nombre"];
		$gen =$_POST["genero"];
		$email = $_POST["correo"];
		$edad = $_POST["edad"];
		$db = new database();
		$db->query('INSERT INTO producto(nombre,genero,edad,correo) VALUES (:fname, :genero,'.$edad.',:mail)');
		$db->bind(':fname', $nom);
		$db->bind(':genero', $gen);
		//$db->bind(':edad',$edad );
		$db->bind(':mail', $email);
		$db->execute();
		echo "bien";
	}
?>