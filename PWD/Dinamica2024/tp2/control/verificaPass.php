<?php
include('head.php'); //Incluye en archivo head

$usuario1 = array("usuario" => "luciana", "clave" => "luciana123");
$usuario2 = array("usuario" => "olivia", "clave" => "olivia123");

$usuarios = array($usuario1, $usuario2);

$username = $_POST['username'];
$password = $_POST['password'];


$salida = false;
foreach ($usuarios as $key => $row) {
    $usuario = $row['usuario'];
    $clave = $row['clave'];

    if(($usuario == $username)&&($clave==$password)){
    	$salida = true;
    }
}


if($salida){
	$salida = "BIENVENIDO ".$username;
}
else{
	$salida = "ERROR DE LOGUEO";
}
?>

<body class="fondo">
<div class="container"><br><br>
  	
  <div class="card" style="background-color: white"><br>
  	
    <h2 class="text-primary" style="padding-left: 10px; text-align: center;">
  		<?php 
    		echo $salida;
  		?>
  	</h2><br>

  <div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
	</div>
  
</div>
</body>

?>