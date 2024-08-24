<?php

include('head.php'); //Incluye en archivo head
$numero = $_POST["numero"];

?>

<body class="fondo">
<div class="container" align="center"><br><br>

  	<div class="card mb-3 col-sm-6 text-center" style="background-color: white">

  		<h2 class="text-primary" style="padding-left: 10px;">
  		<?php 
  		if($numero > 0){
  			$salida = "El número ingresado es POSITIVO";
  		}
  		elseif ($numero < 0) {
  			$salida = "El número ingresado es NEGATIVO";
  		}
  		else{
  			$salida = "El número ingresado es CERO";
  		}

  		echo $salida; 
  		?>
  		</h2><br>

  		<div align="center"><a class="linkMenu" href="../vista/tp1ej1.php">Volver</a></div><br>
  		<div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
  	</div>
</div>
</body>