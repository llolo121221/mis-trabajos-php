<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Manejo de archivos PHP</h1>
	<hr>
	<?php 
		$archivo = fopen('contenido.txt', 'r') or exit ('no se encontro el archivo');

		while (!feof($archivo)) {
			echo fgets($archivo)."<br>";
		}
		fclose($archivo);
	 ?>
</body>
</html>