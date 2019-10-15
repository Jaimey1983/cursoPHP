<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

	<?php

		// Esto es un nuevo comentario
		# Esto también es un comentario.
		/* Esto es un comentario más largo. En realidad es para strings largos, verdaderamente largos. Entonces nos muestra en varias líneas los comentarios extensos que hagamos en el documento */

		echo "Hola mundo, este es mi primer hola mundo con ED TEAM"."\n"."hola jaime </p>";
		// Con el punto se unen varias cadenas de strings.
		/* Aunque para mí el lenguaje de php no es ajeno siempre se me olvidan las etiquetas para abrir y cerrar php. (<?php ?>) */
		print("Hola mundo <br>");

		//VARIABLES
		/*Una variable es una pequeña caja que guarda una información, pueden ser strins o enteros(valores numéricos)*/

		$welcome = "Hola mundo... <br>"; //Esta es la primera variable hecha en este archivo $welcome.
		echo $welcome; // Este echo imprime la variable $welcome en pantalla.


		//FUNCIONES

		function suma($a=3, $b=5){
			$suma= $a+$b;
			return $suma;
		}
		echo suma();

		echo "<br>";

		function Suma2($c=24, $d=35){
			if($c+$d<=48){
				echo "verdadero";
			}
			elseif($c+$d=59){
				echo "Completamente verdadero";
			}
			else {
				echo "falso";
			}
		}
		echo Suma2();

	?>

</body>
</html>
