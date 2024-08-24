<?php
include('head.php'); //Incluye en archivo head

$edad = $_POST["edad"];
$estudiante = $_POST["estudiante"];

//echo $edad." - ".$estudiante;

if(($estudiante=="si")&&($edad>=12)){
	$precio = 180;
}
elseif(($estudiante=="si")or($edad<12)){
	$precio = 160;
}
else{
	$precio=300;
}
?>

<body class="fondo">
<div class="container"><br>
  	
  <div class="card" style="background-color: white"><br>
  	
    <h2 class="text-primary" style="padding-left: 10px; text-align: center;">
  		<?php 
    		echo "El valor de entrada es de $".$precio;
  		?>
  	</h2><br>

  <div align="center"><a class="linkMenu" href="../vista/tp1ej8.php">Volver</a></div><br>
  <div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
	</div>
  
</div>
</body>


?>