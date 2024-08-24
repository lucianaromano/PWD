<?php
include('head.php'); //Incluye en archivo head

$dir ='../vista/archivos/';
$salida = false;

if ($_FILES['archivo']['error'] <= 0){

	//Se verifica que el archivo sea una imagen jpg o png
		if (($_FILES['archivo']['type'] == 'image/jpeg') or 
			($_FILES['archivo']['type'] == 'image/png')){
			    
			$imagen = $_FILES['archivo']['tmp_name'];

			if (copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
 			 $imagenGuardada = $dir.$_FILES['archivo']['name'];
 			 $salida = true;
 			}
		}
}


$titulo = $_POST["titulo"];
$actores = $_POST["actores"];
$director = $_POST["director"];
$guion = $_POST["guion"];
$produccion = $_POST["produccion"];
$año = $_POST["año"];
$nacionalidad = $_POST["nacionalidad"];
$genero = $_POST["genero"];
$duracion = $_POST["duracion"];
$sinopsis = $_POST["sinopsis"];
$edad = $_POST["edad"];
?>


<body class="fondo">
<div class="container"><br><br>

  <div class="card" style="background-color: white"><br>
  	<h2 class="text-primary" style="padding-left: 10px;">La pelicula introducida es</h2><br>
  	<span class="titulo">Titulo: <span class="subtitulo"><?php echo $titulo ?></span></span><br>
  	<span class="titulo">Actores: <span class="subtitulo"><?php echo $actores ?></span></span><br>
  	<span class="titulo">Director: <span class="subtitulo"><?php echo $director ?></span></span><br>
  	<span class="titulo">Guion: <span class="subtitulo"><?php echo $guion ?></span></span><br>
  	<span class="titulo">Producción: <span class="subtitulo"><?php echo $produccion ?></span></span><br>
  	<span class="titulo">Año: <span class="subtitulo"><?php echo $año ?></span></span><br>
  	<span class="titulo">Nacionalidad: <span class="subtitulo"><?php echo $nacionalidad ?></span></span><br>
  	<span class="titulo">Genero: <span class="subtitulo"><?php echo $genero ?></span></span><br>
  	<span class="titulo">Duración: <span class="subtitulo"><?php echo $duracion ?></span></span><br>
  	<span class="titulo">Sinopsis: <span class="subtitulo"><?php echo $sinopsis ?></span></span><br>
  	<span class="titulo">Restricciones de edad: <span class="subtitulo"><?php echo $edad ?></span></span><br>

  	<?php if($salida){ ?>
  		<div align="center"><img src="<?php echo $imagenGuardada ?>" width="500" height="300"></div><br>
  	<?php } ?>

  <div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
	</div>
  

</div>
</body>

