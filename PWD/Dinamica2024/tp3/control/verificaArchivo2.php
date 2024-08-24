<?php
include('head.php'); //Incluye en archivo head


$dir ='archivos/';

if ($_FILES['archivo']['error'] <= 0) {

		//Se verifica que el archivo sea txt
		if ($_FILES['archivo']['type'] != 'text/plain'){
			    
			echo "<body class='fondo'>";
		 	echo "<div class='container'><br><br>";
		 	echo "<div class='card' style='background-color: white'><br>";
		 	echo "<h2 class='text-primary' style='padding-left: 10px; text-align: center;'>";
		 	echo "El archivo NO cumple la extensión requerida";
		 	echo "</h2>";
		 	echo "<div align='center'><a class='linkMenu' href='../../index.php'>Menu</a></div><br>";
		 	echo "</div>";
		 	echo "</div>";
		 	echo "</body>";

		}
		else{ 
			//echo "El archivo SI cumple la extensión requerida";
			//file_get_contents = obtiene todo el contenido de un archivo de texto con PHP
			
			echo "<body class='fondo'>";
			echo "<div class='container' align='center'><br><br>";
			echo "<label id='tituloTextarea'>";
			echo 'Contenido del archivo';
			echo "</label><br>";
			echo "<textarea id='mensajeTextarea'>";
			$contenido = file_get_contents($_FILES['archivo']['tmp_name']);
			echo $contenido;
			echo "</textarea>";
			echo "<div>";
			echo "<div align='center'><a class='linkMenu' href='../../index.php'>Menu</a></div><br>";
			echo "</body>";
		}
		
}
else{
	echo "<body class='fondo'>";
 	echo "<div class='container'><br>";
 	echo "<div class='card' style='background-color: white'><br><br>";
 	echo "<h2 class='text-primary' style='padding-left: 10px; text-align: center;'>";
 	echo "No se pudo cargar el archivo, No se pudo acceder al archivo Temporal";
 	echo "</h2>";
 	echo "<div align='center'><a class='linkMenu' href='../../index.php'>Menu</a></div><br>";
 	echo "</div>";
 	echo "</div>";
 	echo "</body>";
}
?>
