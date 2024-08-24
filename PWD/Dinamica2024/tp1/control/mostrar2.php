<?php
include('head.php'); //Incluye en archivo head

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];
$direccion = $_GET["direccion"];
?>

<body class="fondo">
<div class="container" align="center"><br><br>

  	<div class="card" style="background-color: white;"><br>
  		
  		<h2 class="text-primary" style="padding-left: 10px;">
  		<?php 
  			echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion; 
  		?>	
  		</h2><br>

  	<div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>

	</div>

</div>
</body>