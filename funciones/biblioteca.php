<?php 
	
	# Creacion de las variables que reciven por el metodo post su valor 
	error_reporting(0);
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operador = $_POST['operador'];

	 /* Creacion de la funcion de la operaciones Suma, resta, multiplicacion, division. Por default la funcion hace suma
    con los dos primeros parametros */
   function operaciones($num1, $num2, $operador){
	   if ($operador == "S"){
		   $resultado = (int)$num1 + (int)$num2;
	   }
	   elseif ($operador =='R'){
		$resultado = (int)$num1 - (int)$num2;
	   }
	   elseif ($operador == "M"){
		$resultado = (int)$num1 * (int)$num2;
	   }
	   elseif ($operador == "D") {
		$resultado = (int)$num1 / (int)$num2;
	   }
	   else {
			$resultado = 0;
		}
	return $resultado; # retorno el resultado si las condiciones se cumplén.
   };
?>

