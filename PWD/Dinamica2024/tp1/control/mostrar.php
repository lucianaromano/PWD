<?php

include('head.php'); //Incluye en archivo head

$lunes = $_GET["lunes"];
$martes = $_GET["martes"];
$miercoles = $_GET["miercoles"];
$jueves = $_GET["jueves"];
$viernes = $_GET["viernes"];

$horas = [$lunes, $martes, $miercoles, $jueves, $viernes];
$cantidadHoras = array_sum($horas);

?>

<body class="fondo">
<div class="container" align="center"><br><br>

  	<div class="card mb-3 col-sm-8 text-center" style="background-color: white">
        <h2 class="text-primary" style="padding-left: 10px">Programación Web Dinámica<br></h2>
          <span style="font-size: 22px;">
           <?php echo "La cantidad de horas que se cursan por semana son: ".$cantidadHoras;?>
          </span><br><br>
        <div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
	</div>
</div>
</body>