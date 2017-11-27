<html>
	<head>
		<title>Ejercicio 1 - Nombre completo </title>
		<meta charset = "utf-8">
	</head>
	<body>
		<h1>Ejercicio 1</h1>
		<form action="#" method="POST">
			<label for="name">NOMBRE: </label>
			<div>
				<input type="text" name="nombre">
			</div>
			<label for="apellido1">APELLIDO 1: </label>
			<div>
				<input type="text" name="apellido1">
			</div>
			<label for="apellido2">APELLIDO 2: </label>
			<div>
				<input type="text" name="apellido2">
			</div>
			<br><br>
			<div>
				<input type="submit">
			</div>
		</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["nombre"])) {
				echo "<p>El nombre está vacío</p>";
			}
			if (empty($_POST["apellido1"])) {
				echo "<p>El apellido 1 está vacío</p>";
			}
			if (empty($_POST["apellido2"])) {
				echo "<p>El apellido 2 está vacío</p>";
			}

			if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"])) {
				echo "<p>".$_POST["nombre"]." ".$_POST["apellido1"]." ".$_POST["apellido2"]."</p>";
			}
		;}
	?>
	</body>
</html>