
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Funciones con Php</title>
</head>
<body>
	<?php
	/* Desarrollado por Danilo Martinez Osorno
	Curso de desarrollo web con PHP 
	Actividad de aprendizaje 3
	Evidencia: Taller “Uso de funciones”
	*** CORRECCION***
	*/
	?>
    <div class="container text-center">
	<?php require('biblioteca.php')   # Llamo el archivo externo el cual contiene la funcion de operaciones.?> 
		<h1>Calculadora</h1>							<!-- fORMULARIO DE INTRODUCCION DE PARAMETROS PARA HACER LA OPERACION. -->
		<form action="index.php" method="post">
			<select  class=" form-control" default="S" name="operador">
				<option value="S">Suma</option>
				<option value="R">Resta</option>
				<option value="M">Multiplicacion</option>
				<option value="D">Division</option>
			</select><br />
			Ingresa tu primer número:<br />
			<input  class=" form-control" type="text" name="num1"><br />
			Ingresa tu segundo número:<br />
			<input  class=" form-control" type="text"  name="num2"><br>
			<input  class= "btn" type="reset" value="Borrar">
			<input  class="btn" type="submit" value="Enviar">
		</form>
		<?php
		$resultado = operaciones($num1, $num2, $operador); # tomo el return de la funcion en la variable $resultado.
		echo "<br><h3>el resultado es: $resultado</h3>";   # Imprimo el resultado de la operacion mandada en el formulario.
		?>
        </div>
</body>
</html>