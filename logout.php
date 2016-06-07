<?php
session_start();
session_destroy();
echo '<script> alert("Has cerrado sesión exitosamente.");</script>';
echo '<script> window.location="/"; </script>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cerrando Sesión</title>
    <link rel="shortcut icon" href="/favicon.ico">
	<meta charset="utf-8">
</head>
<body>
</body>
</html>