<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">	
	<title>EJERCICIO 1</title>
</head>
<body>
<form action="segunda_parte.php" method="POST"  > 
	cantidad de dias:<br>
	<input type="text"name="dias" id="dias" value="0"> 
	<input type="submit" value="Enviar">
</form>

<?php if (!empty($_GET['velocidad'])) {
	echo "la cantidad del recorrido es:".$_GET['velocidad'];
}



 ?>
</body>
</html>
