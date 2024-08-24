<?php
include('head.php'); //Incluye en archivo head

$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$operando = $_POST["operando"];

?>

<body class="fondo">
<div class="container"><br>
  	
  <div class="card" style="background-color: white"><br><br>
  	
    <h2 class="text-primary" style="padding-left: 10px; text-align: center;">
  		<?php 
    		$operacion = $valor1."$operando".$valor2;
    		if($operando == "+"){
    			$resultado = $valor1+$valor2;
    		}
    		if($operando == "-"){
    			$resultado = $valor1-$valor2;
    		}
    		if($operando == "*"){
    			$resultado = $valor1*$valor2;
    		}
    		if($operando == "/"){
    			$resultado = $valor1/$valor2;
    		}
    		echo "OPERACIÓN <br>".$operacion."<br>RESULTADO<br>".$resultado;
  		?>
  	</h2><br>

  <div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
	</div>
  
</div>
</body>