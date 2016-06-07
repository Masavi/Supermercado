<?php
	session_start();
	require_once('db.class.php');
	$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validación en curso</title>
    <link rel="shortcut icon" href="/favicon.ico">
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			if(isset($_POST['login']))
            {
				$correo = $_POST['email'];
				$password = $_POST['password'];
				$db -> query("SELECT * FROM cajero WHERE correo=:correo AND pass=:pass");
				$db->bind(':correo', $_POST['email']);
				$db->bind(':pass', $_POST['password']);
				$result = $db->single();

				if (!empty($result)) 
                {
					$_SESSION["email"] = $result['correo']; 
					$_SESSION["nombre"] = $result['nombre'];
                    $_SESSION["permiso"] = $result['permiso'];
					echo '<script> window.location="index.php"; </script>';
				}
				
				else
                {
					echo '<script> alert("El correo electrónico y/o la contraseña que ingresaste no coinciden con niguna cuenta. Comunícate con un supervisor si necesitas ayuda para iniciar sesión.");</script>';
					echo '<script> window.location="login.php"; </script>';
                 
				}
                
			}
		?>	
</body>
</html>
