<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
		
		// Esto es un comentario
		# Esto también es un comentario.
		/* Esto es un comentario más largo. En realidad es para strings largos, verdaderamente largos. Entonces nos muestra en varias líneas los comentarios extensos que hagamos en el documento */
	
		echo "Hola mundo, este es mi primer hola mundo con ED TEAM"."\n"."hola jaime </p>";
		// Con el punto se unen varias cadenas de strings.
		/* Aunque para mí el lenguaje de php no es ajeno siempre se me olvidan las etiquetas para abrir y cerrar php. (<?php ?>) */
		print("Hola mundo");
	
		$welcome = "Hola mundo"; //Esta es la primera variable hecha en este archivo.
		function suma($a=3, $b=5){
			$suma= $a+$b;
			return $suma;
		}
		echo suma();
	
	?>
	
</body>
</html>