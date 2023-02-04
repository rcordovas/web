<html>
<head>
<title>Bienvenido</title>
</head>
<body>
<form action="index.php" method="GET">
    Ingrese nombre del alumno: 
	<input type="text" name="alumno">
	<input type="submit" value="Enviar">
</form>

Hola 
<?php 
if (isset ($_GET['alumno'])){ 
	echo $_GET['alumno']; 
}
?>
<br/>
<br/>
<img src="../dashboard/images/apple-logo.png" alt="Logo Apple">

</body>
</html>
