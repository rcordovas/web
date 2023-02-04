<html>
<head>
<title>Bienvenido</title>
</head>
<body>
<form action="index.php" method="GET">
    Ingrese nombre del alumno: <br/><br/>
	<input type="text" name="nombre"><br/><br/>
	<input type="text" name="apellido"><br/><br/>
	<input type="submit" value="Enviar">
</form>

Hola 
<?php 
if (isset ($_GET['nombre']) && isset ($_GET['nombre'])){ 
	echo $_GET['nombre']. " " .  $_GET['apellido']; 
}
?>
<br/>
<br/>
<img src="../dashboard/images/apple-logo.png" alt="Logo Apple">

</body>
</html>
