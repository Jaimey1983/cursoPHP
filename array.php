<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php 
	
		$mercancia = array(
			"zapatillas" => array("Nike", "Adidas","Puma", "Skicher"),
			 "polos" => array("Asturo Calle", "Kalvin Clein", "American Eagle", "Quest"),
			"jean" => array("Levis", "Asturo Calle", "Quest", "American Eagle")
		);
	echo $mercancia ["jean"][3];
	
	echo "<br>";
	
	$lista = array(
		array(10,20,30,40),
		array(50,60, 70),
		array(80, 90, 100));
	echo $lista [0][2];
		
	?>	
	
</body>
</html>