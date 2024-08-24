<?php
include('head.php'); //Incluye en archivo head

$dir ='../vista/archivos/';
$permitido = 2097152;
$tamanioArchivo = $_FILES['archivo']['size'];


if ($_FILES['archivo']['error'] <= 0) {

	if($tamanioArchivo > $permitido){

				echo "<body class='fondo'>";
 				echo "<div class='container'><br><br>";
 				echo "<div class='card' style='background-color: white'><br>";
 				echo "<h2 class='text-primary' style='padding-left: 10px; text-align: center;'>";
 				echo "El archivo supera la capacidad de 2MB permitidos";
 				echo "</h2>";
 				echo "<div align='center'><a class='linkMenu' href='../../index.php'>Menu</a></div><br>";
 				echo "</div>";
 				echo "</div>";
 				echo "</body>";
	}
	else{
	
		//Se verifica que el archivo sea PDF y .doc
		if (($_FILES['archivo']['type'] !='application/pdf') and 
			($_FILES['archivo']['type'] != 'application/msword')){

				echo "<body class='fondo'>";
 				echo "<div class='container'><br><br>";
 				echo "<div class='card' style='background-color: white'><br>";
 				echo "<h2 class='text-primary' style='padding-left: 10px; text-align: center;'>";
 				echo "El archivo NO cumple con la extensión requerida";
 				echo "</h2>";
 				echo "<div align='center'><a class='linkMenu' href='../../index.php'>Menu</a></div><br>";
 				echo "</div>";
 				echo "</div>";
 				echo "</body>";
		}
		else{ //echo "El archivo SI cumple la extensión requerida";
		    
		    if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {

 				echo "<body class='fondo'>";
 				echo "<div class='container'><br><br>";
 				echo "<div class='card' style='background-color: white'><br>";
 				echo "<h2 class='text-primary' style='padding-left: 10px; text-align: center;'>";
 				echo "ERROR: no se pudo cargar el archivo";
 				echo "</h2>";
 				echo "<div align='center'><a class='linkMenu' href='../../index.php'>Menu</a></div><br>";
 				echo "</div>";
 				echo "</div>";
 				echo "</body>";
 			}
			else{
				echo "<body class='fondo'>";
 				echo "<div class='container'><br><br>";
 				echo "<div class='card' style='background-color: white'><br>";
 				echo "<h2 class='text-primary' style='padding-left: 10px; text-align: center;'>";
 				echo "EL ARCHIVO <br>".$_FILES["archivo"]["name"]."<br> SE HA COPIADO CON ÉXITO <br><br>";
 				$nombreArchivo = str_replace(" ","%20",$_FILES["archivo"]["name"]);
 				echo "<a class='linkMenu' href=".$dir.$nombreArchivo." target='_blank'>Ver archivo</a>";
 				echo "</h2>";
 				echo "<div align='center'><a class='linkMenu' href='../../index.php'>Menu</a></div><br>";
 				echo "</div>";
 				echo "</div>";
 				echo "</body>";
			}
		}
	}
}
else{

 		echo "<body class='fondo'>";
 		echo "<div class='container'><br><br>";
 		echo "<div class='card' style='background-color: white'><br>";
 		echo "<h2 class='text-primary' style='padding-left: 10px; text-align: center;'>";
 		echo "No se pudo cargar el archivo, No se pudo acceder al archivo Temporal";
 		echo "</h2>";
 		echo "<div align='center'><a class='linkMenu' href='../../index.php'>Menu</a></div><br>";
 		echo "</div>";
 		echo "</div>";
 		echo "</body>";
}


?>